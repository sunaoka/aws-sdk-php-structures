<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\UserDetail> $UserDetailList
 * @property list<Shapes\GroupDetail> $GroupDetailList
 * @property list<Shapes\RoleDetail> $RoleDetailList
 * @property list<Shapes\ManagedPolicyDetail> $Policies
 * @property bool $IsTruncated
 * @property string $Marker
 */
class GetAccountAuthorizationDetailsResponse extends Response
{
}
