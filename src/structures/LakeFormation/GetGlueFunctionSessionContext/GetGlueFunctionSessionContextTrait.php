<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetGlueFunctionSessionContext;

trait GetGlueFunctionSessionContextTrait
{
    /**
     * @param GetGlueFunctionSessionContextRequest $args
     * @return GetGlueFunctionSessionContextResponse
     */
    public function getGlueFunctionSessionContext(GetGlueFunctionSessionContextRequest $args)
    {
        $result = parent::getGlueFunctionSessionContext($args->toArray());
        return new GetGlueFunctionSessionContextResponse($result->toArray());
    }
}
