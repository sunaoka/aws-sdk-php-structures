<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceEventWindowId
 * @property list<InstanceEventWindowTimeRange> $TimeRanges
 * @property string $Name
 * @property string $CronExpression
 * @property InstanceEventWindowAssociationTarget $AssociationTarget
 * @property 'creating'|'deleting'|'active'|'deleted' $State
 * @property list<Tag> $Tags
 */
class InstanceEventWindow extends Shape
{
    /**
     * @param array{
     *     InstanceEventWindowId?: string,
     *     TimeRanges?: list<InstanceEventWindowTimeRange>,
     *     Name?: string,
     *     CronExpression?: string,
     *     AssociationTarget?: InstanceEventWindowAssociationTarget,
     *     State?: 'creating'|'deleting'|'active'|'deleted',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
