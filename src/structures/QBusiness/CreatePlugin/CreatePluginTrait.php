<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreatePlugin;

trait CreatePluginTrait
{
    /**
     * @param CreatePluginRequest $args
     * @return CreatePluginResponse
     */
    public function createPlugin(CreatePluginRequest $args)
    {
        $result = parent::createPlugin($args->toArray());
        return new CreatePluginResponse($result->toArray());
    }
}
