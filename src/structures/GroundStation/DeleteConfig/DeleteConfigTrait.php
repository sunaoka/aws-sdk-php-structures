<?php

namespace Sunaoka\Aws\Structures\GroundStation\DeleteConfig;

trait DeleteConfigTrait
{
    /**
     * @param DeleteConfigRequest $args
     * @return DeleteConfigResponse
     */
    public function deleteConfig(DeleteConfigRequest $args)
    {
        $result = parent::deleteConfig($args->toArray());
        return new DeleteConfigResponse($result->toArray());
    }
}
