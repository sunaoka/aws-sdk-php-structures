<?php

namespace Sunaoka\Aws\Structures\IdentityStore;

class IdentityStoreClient extends \Aws\IdentityStore\IdentityStoreClient
{
    use CreateGroup\CreateGroupTrait;
    use CreateGroupMembership\CreateGroupMembershipTrait;
    use CreateUser\CreateUserTrait;
    use DeleteGroup\DeleteGroupTrait;
    use DeleteGroupMembership\DeleteGroupMembershipTrait;
    use DeleteUser\DeleteUserTrait;
    use DescribeGroup\DescribeGroupTrait;
    use DescribeGroupMembership\DescribeGroupMembershipTrait;
    use DescribeUser\DescribeUserTrait;
    use GetGroupId\GetGroupIdTrait;
    use GetGroupMembershipId\GetGroupMembershipIdTrait;
    use GetUserId\GetUserIdTrait;
    use IsMemberInGroups\IsMemberInGroupsTrait;
    use ListGroupMemberships\ListGroupMembershipsTrait;
    use ListGroupMembershipsForMember\ListGroupMembershipsForMemberTrait;
    use ListGroups\ListGroupsTrait;
    use ListUsers\ListUsersTrait;
    use UpdateGroup\UpdateGroupTrait;
    use UpdateUser\UpdateUserTrait;
}
