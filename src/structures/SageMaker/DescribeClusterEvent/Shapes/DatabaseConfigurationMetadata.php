<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NotApplicable'|'Reverted'|'RevertFailed'|null $RollbackStatus
 * @property string|null $Advisory
 * @property string|null $FailureMessage
 */
class DatabaseConfigurationMetadata extends Shape
{
    /**
     * @param array{
     *     RollbackStatus?: 'NotApplicable'|'Reverted'|'RevertFailed'|null,
     *     Advisory?: string|null,
     *     FailureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
