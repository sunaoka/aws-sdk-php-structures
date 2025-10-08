<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteCustomPlugin;

trait DeleteCustomPluginTrait
{
    /**
     * @param DeleteCustomPluginRequest $args
     * @return DeleteCustomPluginResponse
     */
    public function deleteCustomPlugin(DeleteCustomPluginRequest $args)
    {
        $result = parent::deleteCustomPlugin($args->toArray());
        return new DeleteCustomPluginResponse($result->toArray());
    }
}
