<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetABTest;

trait GetABTestTrait
{
    /**
     * @param GetABTestRequest $args
     * @return GetABTestResponse
     */
    public function getABTest(GetABTestRequest $args)
    {
        $result = parent::getABTest($args->toArray());
        return new GetABTestResponse($result->toArray());
    }
}
