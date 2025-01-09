<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED'|'INOPERABLE'|'SKIPPED_SUSPENDED_ACCOUNT'|'FAILED_IMPORT' $DetailedStatus
 */
class StackInstanceComprehensiveStatus extends Shape
{
    /**
     * @param array{DetailedStatus?: 'PENDING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED'|'INOPERABLE'|'SKIPPED_SUSPENDED_ACCOUNT'|'FAILED_IMPORT'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
