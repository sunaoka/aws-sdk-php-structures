<?php

namespace Sunaoka\Aws\Structures\Detective;

class DetectiveClient extends \Aws\Detective\DetectiveClient
{
    use AcceptInvitation\AcceptInvitationTrait;
    use BatchGetGraphMemberDatasources\BatchGetGraphMemberDatasourcesTrait;
    use BatchGetMembershipDatasources\BatchGetMembershipDatasourcesTrait;
    use CreateGraph\CreateGraphTrait;
    use CreateMembers\CreateMembersTrait;
    use DeleteGraph\DeleteGraphTrait;
    use DeleteMembers\DeleteMembersTrait;
    use DescribeOrganizationConfiguration\DescribeOrganizationConfigurationTrait;
    use DisableOrganizationAdminAccount\DisableOrganizationAdminAccountTrait;
    use DisassociateMembership\DisassociateMembershipTrait;
    use EnableOrganizationAdminAccount\EnableOrganizationAdminAccountTrait;
    use GetMembers\GetMembersTrait;
    use ListDatasourcePackages\ListDatasourcePackagesTrait;
    use ListGraphs\ListGraphsTrait;
    use ListInvitations\ListInvitationsTrait;
    use ListMembers\ListMembersTrait;
    use ListOrganizationAdminAccounts\ListOrganizationAdminAccountsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RejectInvitation\RejectInvitationTrait;
    use StartMonitoringMember\StartMonitoringMemberTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDatasourcePackages\UpdateDatasourcePackagesTrait;
    use UpdateOrganizationConfiguration\UpdateOrganizationConfigurationTrait;
}
