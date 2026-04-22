<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness;

trait UpdateHarnessTrait
{
    /**
     * @param UpdateHarnessRequest $args
     * @return UpdateHarnessResponse
     */
    public function updateHarness(UpdateHarnessRequest $args)
    {
        $result = parent::updateHarness($args->toArray());
        return new UpdateHarnessResponse($result->toArray());
    }
}
