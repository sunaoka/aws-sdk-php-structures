<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoverySnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fromDateTime
 * @property string|null $toDateTime
 */
class DescribeRecoverySnapshotsRequestFilters extends Shape
{
    /**
     * @param array{
     *     fromDateTime?: string|null,
     *     toDateTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
