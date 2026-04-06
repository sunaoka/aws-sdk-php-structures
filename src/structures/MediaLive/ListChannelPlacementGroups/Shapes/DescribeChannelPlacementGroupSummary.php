<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannelPlacementGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<string>|null $Channels
 * @property string|null $ClusterId
 * @property string|null $Id
 * @property string|null $Name
 * @property list<string>|null $Nodes
 * @property 'UNASSIGNED'|'ASSIGNING'|'ASSIGNED'|'DELETING'|'DELETE_FAILED'|'DELETED'|'UNASSIGNING'|null $State
 */
class DescribeChannelPlacementGroupSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Channels?: list<string>|null,
     *     ClusterId?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Nodes?: list<string>|null,
     *     State?: 'UNASSIGNED'|'ASSIGNING'|'ASSIGNED'|'DELETING'|'DELETE_FAILED'|'DELETED'|'UNASSIGNING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
