<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableRecordExpirationConfiguration;

trait GetTableRecordExpirationConfigurationTrait
{
    /**
     * @param GetTableRecordExpirationConfigurationRequest $args
     * @return GetTableRecordExpirationConfigurationResponse
     */
    public function getTableRecordExpirationConfiguration(GetTableRecordExpirationConfigurationRequest $args)
    {
        $result = parent::getTableRecordExpirationConfiguration($args->toArray());
        return new GetTableRecordExpirationConfigurationResponse($result->toArray());
    }
}
