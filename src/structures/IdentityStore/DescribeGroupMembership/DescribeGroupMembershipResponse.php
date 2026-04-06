<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeGroupMembership;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IdentityStoreId
 * @property string $MembershipId
 * @property string $GroupId
 * @property Shapes\MemberId $MemberId
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $CreatedBy
 * @property string|null $UpdatedBy
 */
class DescribeGroupMembershipResponse extends Response
{
}
