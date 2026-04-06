<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetOperatorApp;

trait GetOperatorAppTrait
{
    /**
     * @param GetOperatorAppRequest $args
     * @return GetOperatorAppResponse
     */
    public function getOperatorApp(GetOperatorAppRequest $args)
    {
        $result = parent::getOperatorApp($args->toArray());
        return new GetOperatorAppResponse($result->toArray());
    }
}
