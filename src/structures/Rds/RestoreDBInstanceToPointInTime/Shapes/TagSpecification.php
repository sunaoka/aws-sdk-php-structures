<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property list<Tag>|null $Tags
 */
class TagSpecification extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
