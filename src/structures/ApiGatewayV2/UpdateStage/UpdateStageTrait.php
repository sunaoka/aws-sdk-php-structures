<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateStage;

trait UpdateStageTrait
{
    /**
     * @param UpdateStageRequest $args
     * @return UpdateStageResponse
     */
    public function updateStage(UpdateStageRequest $args)
    {
        $result = parent::updateStage($args->toArray());
        return new UpdateStageResponse($result->toArray());
    }
}
