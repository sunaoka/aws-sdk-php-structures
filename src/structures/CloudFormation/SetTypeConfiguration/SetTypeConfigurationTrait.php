<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SetTypeConfiguration;

trait SetTypeConfigurationTrait
{
    /**
     * @param SetTypeConfigurationRequest $args
     * @return SetTypeConfigurationResponse
     */
    public function setTypeConfiguration(SetTypeConfigurationRequest $args)
    {
        $result = parent::setTypeConfiguration($args->toArray());
        return new SetTypeConfigurationResponse($result->toArray());
    }
}
