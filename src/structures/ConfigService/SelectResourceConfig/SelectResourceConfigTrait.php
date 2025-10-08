<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectResourceConfig;

trait SelectResourceConfigTrait
{
    /**
     * @param SelectResourceConfigRequest $args
     * @return SelectResourceConfigResponse
     */
    public function selectResourceConfig(SelectResourceConfigRequest $args)
    {
        $result = parent::selectResourceConfig($args->toArray());
        return new SelectResourceConfigResponse($result->toArray());
    }
}
