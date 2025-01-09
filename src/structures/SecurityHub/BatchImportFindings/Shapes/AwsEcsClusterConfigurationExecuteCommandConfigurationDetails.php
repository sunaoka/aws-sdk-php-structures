<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property AwsEcsClusterConfigurationExecuteCommandConfigurationLogConfigurationDetails $LogConfiguration
 * @property string $Logging
 */
class AwsEcsClusterConfigurationExecuteCommandConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     LogConfiguration?: AwsEcsClusterConfigurationExecuteCommandConfigurationLogConfigurationDetails,
     *     Logging?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
