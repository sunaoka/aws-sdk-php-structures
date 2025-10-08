<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutResourceConfig;

trait PutResourceConfigTrait
{
    /**
     * @param PutResourceConfigRequest $args
     * @return void
     */
    public function putResourceConfig(PutResourceConfigRequest $args)
    {
        parent::putResourceConfig($args->toArray());
    }
}
