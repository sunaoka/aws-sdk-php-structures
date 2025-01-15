<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedUserPolicies;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AttachedPolicy>|null $AttachedPolicies
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 */
class ListAttachedUserPoliciesResponse extends Response
{
}
