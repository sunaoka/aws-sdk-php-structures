<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateCustomPlugin;

trait CreateCustomPluginTrait
{
    /**
     * @param CreateCustomPluginRequest $args
     * @return CreateCustomPluginResponse
     */
    public function createCustomPlugin(CreateCustomPluginRequest $args)
    {
        $result = parent::createCustomPlugin($args->toArray());
        return new CreateCustomPluginResponse($result->toArray());
    }
}
