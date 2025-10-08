<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteResourceConfig;

trait DeleteResourceConfigTrait
{
    /**
     * @param DeleteResourceConfigRequest $args
     * @return void
     */
    public function deleteResourceConfig(DeleteResourceConfigRequest $args)
    {
        parent::deleteResourceConfig($args->toArray());
    }
}
