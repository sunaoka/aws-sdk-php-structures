<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteABTest;

trait DeleteABTestTrait
{
    /**
     * @param DeleteABTestRequest $args
     * @return DeleteABTestResponse
     */
    public function deleteABTest(DeleteABTestRequest $args)
    {
        $result = parent::deleteABTest($args->toArray());
        return new DeleteABTestResponse($result->toArray());
    }
}
