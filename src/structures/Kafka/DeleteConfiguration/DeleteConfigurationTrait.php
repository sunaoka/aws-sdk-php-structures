<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteConfiguration;

trait DeleteConfigurationTrait
{
    /**
     * @param DeleteConfigurationRequest $args
     * @return DeleteConfigurationResponse
     */
    public function deleteConfiguration(DeleteConfigurationRequest $args)
    {
        $result = parent::deleteConfiguration($args->toArray());
        return new DeleteConfigurationResponse($result->toArray());
    }
}
