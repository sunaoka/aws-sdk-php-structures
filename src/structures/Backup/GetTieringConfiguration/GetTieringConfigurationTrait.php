<?php

namespace Sunaoka\Aws\Structures\Backup\GetTieringConfiguration;

trait GetTieringConfigurationTrait
{
    /**
     * @param GetTieringConfigurationRequest $args
     * @return GetTieringConfigurationResponse
     */
    public function getTieringConfiguration(GetTieringConfigurationRequest $args)
    {
        $result = parent::getTieringConfiguration($args->toArray());
        return new GetTieringConfigurationResponse($result->toArray());
    }
}
