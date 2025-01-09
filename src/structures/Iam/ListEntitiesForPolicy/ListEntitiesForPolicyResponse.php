<?php

namespace Sunaoka\Aws\Structures\Iam\ListEntitiesForPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\PolicyGroup> $PolicyGroups
 * @property list<Shapes\PolicyUser> $PolicyUsers
 * @property list<Shapes\PolicyRole> $PolicyRoles
 * @property bool $IsTruncated
 * @property string $Marker
 */
class ListEntitiesForPolicyResponse extends Response
{
}
