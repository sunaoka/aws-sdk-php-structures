<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdatePlugin;

trait UpdatePluginTrait
{
    /**
     * @param UpdatePluginRequest $args
     * @return UpdatePluginResponse
     */
    public function updatePlugin(UpdatePluginRequest $args)
    {
        $result = parent::updatePlugin($args->toArray());
        return new UpdatePluginResponse($result->toArray());
    }
}
