<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id'|'volume-id' $Name
 * @property list<string> $Values
 */
class SnapshotFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id'|'volume-id',
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
