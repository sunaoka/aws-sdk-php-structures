<?php

namespace Sunaoka\Aws\Structures\Ec2\CreatePlacementGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property 'cluster'|'spread'|'partition'|null $Strategy
 * @property int|null $PartitionCount
 * @property string|null $GroupId
 * @property list<Tag>|null $Tags
 * @property string|null $GroupArn
 * @property 'host'|'rack'|null $SpreadLevel
 */
class PlacementGroup extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     Strategy?: 'cluster'|'spread'|'partition'|null,
     *     PartitionCount?: int|null,
     *     GroupId?: string|null,
     *     Tags?: list<Tag>|null,
     *     GroupArn?: string|null,
     *     SpreadLevel?: 'host'|'rack'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
