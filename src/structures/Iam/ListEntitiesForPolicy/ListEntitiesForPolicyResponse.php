<?php

namespace Sunaoka\Aws\Structures\Iam\ListEntitiesForPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\PolicyGroup>|null $PolicyGroups
 * @property list<Shapes\PolicyUser>|null $PolicyUsers
 * @property list<Shapes\PolicyRole>|null $PolicyRoles
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 */
class ListEntitiesForPolicyResponse extends Response
{
}
