<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig;

trait CreateConfigTrait
{
    /**
     * @param CreateConfigRequest $args
     * @return CreateConfigResponse
     */
    public function createConfig(CreateConfigRequest $args)
    {
        $result = parent::createConfig($args->toArray());
        return new CreateConfigResponse($result->toArray());
    }
}
