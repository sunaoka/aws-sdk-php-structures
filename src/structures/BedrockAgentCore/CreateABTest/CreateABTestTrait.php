<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateABTest;

trait CreateABTestTrait
{
    /**
     * @param CreateABTestRequest $args
     * @return CreateABTestResponse
     */
    public function createABTest(CreateABTestRequest $args)
    {
        $result = parent::createABTest($args->toArray());
        return new CreateABTestResponse($result->toArray());
    }
}
