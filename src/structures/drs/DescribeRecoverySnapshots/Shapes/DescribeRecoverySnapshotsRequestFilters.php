<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoverySnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fromDateTime
 * @property string $toDateTime
 */
class DescribeRecoverySnapshotsRequestFilters extends Shape
{
    /**
     * @param array{
     *     fromDateTime?: string,
     *     toDateTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
