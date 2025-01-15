<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property AwsEcsClusterConfigurationExecuteCommandConfigurationLogConfigurationDetails|null $LogConfiguration
 * @property string|null $Logging
 */
class AwsEcsClusterConfigurationExecuteCommandConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     LogConfiguration?: AwsEcsClusterConfigurationExecuteCommandConfigurationLogConfigurationDetails|null,
     *     Logging?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
