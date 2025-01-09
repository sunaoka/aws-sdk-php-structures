<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsClusterConfigurationExecuteCommandConfigurationDetails $ExecuteCommandConfiguration
 */
class AwsEcsClusterConfigurationDetails extends Shape
{
    /**
     * @param array{ExecuteCommandConfiguration?: AwsEcsClusterConfigurationExecuteCommandConfigurationDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
