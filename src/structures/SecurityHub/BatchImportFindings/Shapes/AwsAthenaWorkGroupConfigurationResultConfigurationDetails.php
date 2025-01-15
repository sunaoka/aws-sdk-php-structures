<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsAthenaWorkGroupConfigurationResultConfigurationEncryptionConfigurationDetails|null $EncryptionConfiguration
 */
class AwsAthenaWorkGroupConfigurationResultConfigurationDetails extends Shape
{
    /**
     * @param array{EncryptionConfiguration?: AwsAthenaWorkGroupConfigurationResultConfigurationEncryptionConfigurationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
