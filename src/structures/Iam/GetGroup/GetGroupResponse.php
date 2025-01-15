<?php

namespace Sunaoka\Aws\Structures\Iam\GetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Group $Group
 * @property list<Shapes\User> $Users
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 */
class GetGroupResponse extends Response
{
}
