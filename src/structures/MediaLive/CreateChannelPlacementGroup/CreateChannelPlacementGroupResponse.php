<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannelPlacementGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property list<string>|null $Channels
 * @property string|null $ClusterId
 * @property string|null $Id
 * @property string|null $Name
 * @property list<string>|null $Nodes
 * @property 'UNASSIGNED'|'ASSIGNING'|'ASSIGNED'|'DELETING'|'DELETE_FAILED'|'DELETED'|'UNASSIGNING'|null $State
 */
class CreateChannelPlacementGroupResponse extends Response
{
}
