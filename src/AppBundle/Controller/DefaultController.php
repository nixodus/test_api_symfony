<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Add 2 values",
     * )
     *
     * @param Request $request['value1'] - value1
     * @param Request $request['value2'] - value2
     *
     * @return JsonResponse object
     *
     */

     /**    
     * @Route("/addvalues", name="/addvalues")
     */

    public function getAddValues(Request $request)
    {
        
        $returnData = array();
        $returnData['sum'] = '';
        
        $validate = true;

        $value1 = null;
        $value2 = null;
        $errorValue1 = null;
        $errorValue2 = null;
        
        if(is_numeric($request->get('value1'))){
            $value1 = $request->get('value1');             
        }else{
             $returnData['errorValue1'] = 'Value 1 is not number';
             $validate = false;             
        }
        
        if(is_numeric($request->get('value2'))){
             $value2 = $request->get('value2');            
        }else{
             $returnData['errorValue2'] = 'Value 2 is not number';
             $validate = false;                          
        }

        if($validate){
             $returnData['sum'] = $value1 + $value2;
        }
        
        $response = new JsonResponse();

        $response->setData($returnData);
        return $response;
    }    

}
