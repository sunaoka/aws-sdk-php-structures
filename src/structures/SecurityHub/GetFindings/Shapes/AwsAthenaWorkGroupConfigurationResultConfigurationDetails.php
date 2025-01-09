<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsAthenaWorkGroupConfigurationResultConfigurationEncryptionConfigurationDetails $EncryptionConfiguration
 */
class AwsAthenaWorkGroupConfigurationResultConfigurationDetails extends Shape
{
    /**
     * @param array{EncryptionConfiguration?: AwsAthenaWorkGroupConfigurationResultConfigurationEncryptionConfigurationDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
