<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeletePlugin;

trait DeletePluginTrait
{
    /**
     * @param DeletePluginRequest $args
     * @return DeletePluginResponse
     */
    public function deletePlugin(DeletePluginRequest $args)
    {
        $result = parent::deletePlugin($args->toArray());
        return new DeletePluginResponse($result->toArray());
    }
}
