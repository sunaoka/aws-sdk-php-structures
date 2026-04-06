<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetDataLakePrincipal;

trait GetDataLakePrincipalTrait
{
    /**
     * @param GetDataLakePrincipalRequest $args
     * @return GetDataLakePrincipalResponse
     */
    public function getDataLakePrincipal(GetDataLakePrincipalRequest $args)
    {
        $result = parent::getDataLakePrincipal($args->toArray());
        return new GetDataLakePrincipalResponse($result->toArray());
    }
}
