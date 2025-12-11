<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteTieringConfiguration;

trait DeleteTieringConfigurationTrait
{
    /**
     * @param DeleteTieringConfigurationRequest $args
     * @return DeleteTieringConfigurationResponse
     */
    public function deleteTieringConfiguration(DeleteTieringConfigurationRequest $args)
    {
        $result = parent::deleteTieringConfiguration($args->toArray());
        return new DeleteTieringConfigurationResponse($result->toArray());
    }
}
