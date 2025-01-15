<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsClusterConfigurationExecuteCommandConfigurationDetails|null $ExecuteCommandConfiguration
 */
class AwsEcsClusterConfigurationDetails extends Shape
{
    /**
     * @param array{ExecuteCommandConfiguration?: AwsEcsClusterConfigurationExecuteCommandConfigurationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
