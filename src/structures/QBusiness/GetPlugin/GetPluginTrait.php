<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetPlugin;

trait GetPluginTrait
{
    /**
     * @param GetPluginRequest $args
     * @return GetPluginResponse
     */
    public function getPlugin(GetPluginRequest $args)
    {
        $result = parent::getPlugin($args->toArray());
        return new GetPluginResponse($result->toArray());
    }
}
