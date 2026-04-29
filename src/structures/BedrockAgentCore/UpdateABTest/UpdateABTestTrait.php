<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateABTest;

trait UpdateABTestTrait
{
    /**
     * @param UpdateABTestRequest $args
     * @return UpdateABTestResponse
     */
    public function updateABTest(UpdateABTestRequest $args)
    {
        $result = parent::updateABTest($args->toArray());
        return new UpdateABTestResponse($result->toArray());
    }
}
