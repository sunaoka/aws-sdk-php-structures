<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness;

trait DeleteHarnessTrait
{
    /**
     * @param DeleteHarnessRequest $args
     * @return DeleteHarnessResponse
     */
    public function deleteHarness(DeleteHarnessRequest $args)
    {
        $result = parent::deleteHarness($args->toArray());
        return new DeleteHarnessResponse($result->toArray());
    }
}
