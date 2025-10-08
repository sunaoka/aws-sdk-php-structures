<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListCustomPlugins;

trait ListCustomPluginsTrait
{
    /**
     * @param ListCustomPluginsRequest $args
     * @return ListCustomPluginsResponse
     */
    public function listCustomPlugins(ListCustomPluginsRequest $args)
    {
        $result = parent::listCustomPlugins($args->toArray());
        return new ListCustomPluginsResponse($result->toArray());
    }
}
