<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableRecordExpirationConfiguration;

trait PutTableRecordExpirationConfigurationTrait
{
    /**
     * @param PutTableRecordExpirationConfigurationRequest $args
     * @return void
     */
    public function putTableRecordExpirationConfiguration(PutTableRecordExpirationConfigurationRequest $args)
    {
        parent::putTableRecordExpirationConfiguration($args->toArray());
    }
}
