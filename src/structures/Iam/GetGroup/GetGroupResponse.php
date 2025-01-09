<?php

namespace Sunaoka\Aws\Structures\Iam\GetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Group $Group
 * @property list<Shapes\User> $Users
 * @property bool $IsTruncated
 * @property string $Marker
 */
class GetGroupResponse extends Response
{
}
