<?php

namespace Sunaoka\Aws\Structures\AppTest\DeleteTestConfiguration;

trait DeleteTestConfigurationTrait
{
    /**
     * @param DeleteTestConfigurationRequest $args
     * @return DeleteTestConfigurationResponse
     */
    public function deleteTestConfiguration(DeleteTestConfigurationRequest $args)
    {
        $result = parent::deleteTestConfiguration($args->toArray());
        return new DeleteTestConfigurationResponse($result->toArray());
    }
}
