<?php

namespace Sunaoka\Aws\Structures\CodeStar;

class CodeStarClient extends \Aws\CodeStar\CodeStarClient
{
    use AssociateTeamMember\AssociateTeamMemberTrait;
    use CreateProject\CreateProjectTrait;
    use CreateUserProfile\CreateUserProfileTrait;
    use DeleteProject\DeleteProjectTrait;
    use DeleteUserProfile\DeleteUserProfileTrait;
    use DescribeProject\DescribeProjectTrait;
    use DescribeUserProfile\DescribeUserProfileTrait;
    use DisassociateTeamMember\DisassociateTeamMemberTrait;
    use ListProjects\ListProjectsTrait;
    use ListResources\ListResourcesTrait;
    use ListTagsForProject\ListTagsForProjectTrait;
    use ListTeamMembers\ListTeamMembersTrait;
    use ListUserProfiles\ListUserProfilesTrait;
    use TagProject\TagProjectTrait;
    use UntagProject\UntagProjectTrait;
    use UpdateProject\UpdateProjectTrait;
    use UpdateTeamMember\UpdateTeamMemberTrait;
    use UpdateUserProfile\UpdateUserProfileTrait;
}
