<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapmirrorRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id'|'destination-volume-id'|null $Name
 * @property list<string>|null $Values
 */
class SnapmirrorRelationshipFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id'|'destination-volume-id'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
