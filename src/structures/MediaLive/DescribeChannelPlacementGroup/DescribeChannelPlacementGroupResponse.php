<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannelPlacementGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<string> $Channels
 * @property string $ClusterId
 * @property string $Id
 * @property string $Name
 * @property list<string> $Nodes
 * @property 'UNASSIGNED'|'ASSIGNING'|'ASSIGNED'|'DELETING'|'DELETE_FAILED'|'DELETED'|'UNASSIGNING' $State
 */
class DescribeChannelPlacementGroupResponse extends Response
{
}
