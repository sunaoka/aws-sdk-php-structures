<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteSystemTableConfiguration;

trait DeleteSystemTableConfigurationTrait
{
    /**
     * @param DeleteSystemTableConfigurationRequest $args
     * @return DeleteSystemTableConfigurationResponse
     */
    public function deleteSystemTableConfiguration(DeleteSystemTableConfigurationRequest $args)
    {
        $result = parent::deleteSystemTableConfiguration($args->toArray());
        return new DeleteSystemTableConfigurationResponse($result->toArray());
    }
}
