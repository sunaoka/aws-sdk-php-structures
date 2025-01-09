<?php

namespace Sunaoka\Aws\Structures\CloudFormation\BatchDescribeTypeConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorMessage
 * @property TypeConfigurationIdentifier $TypeConfigurationIdentifier
 */
class BatchDescribeTypeConfigurationsError extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string,
     *     ErrorMessage?: string,
     *     TypeConfigurationIdentifier?: TypeConfigurationIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
