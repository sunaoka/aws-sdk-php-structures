<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id'|'volume-id'|null $Name
 * @property list<string>|null $Values
 */
class SnapshotFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id'|'volume-id'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
