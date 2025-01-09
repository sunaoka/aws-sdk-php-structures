<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannelPlacementGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string> $Channels
 * @property string $ClusterId
 * @property string $Id
 * @property string $Name
 * @property list<string> $Nodes
 * @property 'UNASSIGNED'|'ASSIGNING'|'ASSIGNED'|'DELETING'|'DELETE_FAILED'|'DELETED'|'UNASSIGNING' $State
 */
class DescribeChannelPlacementGroupSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Channels?: list<string>,
     *     ClusterId?: string,
     *     Id?: string,
     *     Name?: string,
     *     Nodes?: list<string>,
     *     State?: 'UNASSIGNED'|'ASSIGNING'|'ASSIGNED'|'DELETING'|'DELETE_FAILED'|'DELETED'|'UNASSIGNING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
