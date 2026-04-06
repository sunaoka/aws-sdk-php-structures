<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData;

class DirectoryServiceDataClient extends \Aws\DirectoryServiceData\DirectoryServiceDataClient
{
    use AddGroupMember\AddGroupMemberTrait;
    use CreateGroup\CreateGroupTrait;
    use CreateUser\CreateUserTrait;
    use DeleteGroup\DeleteGroupTrait;
    use DeleteUser\DeleteUserTrait;
    use DescribeGroup\DescribeGroupTrait;
    use DescribeUser\DescribeUserTrait;
    use DisableUser\DisableUserTrait;
    use ListGroupMembers\ListGroupMembersTrait;
    use ListGroups\ListGroupsTrait;
    use ListGroupsForMember\ListGroupsForMemberTrait;
    use ListUsers\ListUsersTrait;
    use RemoveGroupMember\RemoveGroupMemberTrait;
    use SearchGroups\SearchGroupsTrait;
    use SearchUsers\SearchUsersTrait;
    use UpdateGroup\UpdateGroupTrait;
    use UpdateUser\UpdateUserTrait;
}
