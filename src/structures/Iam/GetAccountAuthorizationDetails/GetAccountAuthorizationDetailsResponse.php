<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\UserDetail>|null $UserDetailList
 * @property list<Shapes\GroupDetail>|null $GroupDetailList
 * @property list<Shapes\RoleDetail>|null $RoleDetailList
 * @property list<Shapes\ManagedPolicyDetail>|null $Policies
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 */
class GetAccountAuthorizationDetailsResponse extends Response
{
}
