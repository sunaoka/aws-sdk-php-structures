<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceEventWindowId
 * @property list<InstanceEventWindowTimeRange>|null $TimeRanges
 * @property string|null $Name
 * @property string|null $CronExpression
 * @property InstanceEventWindowAssociationTarget|null $AssociationTarget
 * @property 'creating'|'deleting'|'active'|'deleted'|null $State
 * @property list<Tag>|null $Tags
 */
class InstanceEventWindow extends Shape
{
    /**
     * @param array{
     *     InstanceEventWindowId?: string|null,
     *     TimeRanges?: list<InstanceEventWindowTimeRange>|null,
     *     Name?: string|null,
     *     CronExpression?: string|null,
     *     AssociationTarget?: InstanceEventWindowAssociationTarget|null,
     *     State?: 'creating'|'deleting'|'active'|'deleted'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
