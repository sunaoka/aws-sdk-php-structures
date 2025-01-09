<?php

namespace Sunaoka\Aws\Structures\Ec2\CreatePlacementGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property 'pending'|'available'|'deleting'|'deleted' $State
 * @property 'cluster'|'spread'|'partition' $Strategy
 * @property int $PartitionCount
 * @property string $GroupId
 * @property list<Tag> $Tags
 * @property string $GroupArn
 * @property 'host'|'rack' $SpreadLevel
 */
class PlacementGroup extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     State?: 'pending'|'available'|'deleting'|'deleted',
     *     Strategy?: 'cluster'|'spread'|'partition',
     *     PartitionCount?: int,
     *     GroupId?: string,
     *     Tags?: list<Tag>,
     *     GroupArn?: string,
     *     SpreadLevel?: 'host'|'rack'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
