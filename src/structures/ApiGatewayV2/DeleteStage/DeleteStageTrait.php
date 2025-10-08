<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteStage;

trait DeleteStageTrait
{
    /**
     * @param DeleteStageRequest $args
     * @return void
     */
    public function deleteStage(DeleteStageRequest $args)
    {
        parent::deleteStage($args->toArray());
    }
}
