<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListPlugins;

trait ListPluginsTrait
{
    /**
     * @param ListPluginsRequest $args
     * @return ListPluginsResponse
     */
    public function listPlugins(ListPluginsRequest $args)
    {
        $result = parent::listPlugins($args->toArray());
        return new ListPluginsResponse($result->toArray());
    }
}
