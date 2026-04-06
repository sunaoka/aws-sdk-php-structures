<?php

namespace Sunaoka\Aws\Structures\RAM;

class RAMClient extends \Aws\RAM\RAMClient
{
    use AcceptResourceShareInvitation\AcceptResourceShareInvitationTrait;
    use AssociateResourceShare\AssociateResourceShareTrait;
    use AssociateResourceSharePermission\AssociateResourceSharePermissionTrait;
    use CreatePermission\CreatePermissionTrait;
    use CreatePermissionVersion\CreatePermissionVersionTrait;
    use CreateResourceShare\CreateResourceShareTrait;
    use DeletePermission\DeletePermissionTrait;
    use DeletePermissionVersion\DeletePermissionVersionTrait;
    use DeleteResourceShare\DeleteResourceShareTrait;
    use DisassociateResourceShare\DisassociateResourceShareTrait;
    use DisassociateResourceSharePermission\DisassociateResourceSharePermissionTrait;
    use EnableSharingWithAwsOrganization\EnableSharingWithAwsOrganizationTrait;
    use GetPermission\GetPermissionTrait;
    use GetResourcePolicies\GetResourcePoliciesTrait;
    use GetResourceShareAssociations\GetResourceShareAssociationsTrait;
    use GetResourceShareInvitations\GetResourceShareInvitationsTrait;
    use GetResourceShares\GetResourceSharesTrait;
    use ListPendingInvitationResources\ListPendingInvitationResourcesTrait;
    use ListPermissionAssociations\ListPermissionAssociationsTrait;
    use ListPermissionVersions\ListPermissionVersionsTrait;
    use ListPermissions\ListPermissionsTrait;
    use ListPrincipals\ListPrincipalsTrait;
    use ListReplacePermissionAssociationsWork\ListReplacePermissionAssociationsWorkTrait;
    use ListResourceSharePermissions\ListResourceSharePermissionsTrait;
    use ListResourceTypes\ListResourceTypesTrait;
    use ListResources\ListResourcesTrait;
    use ListSourceAssociations\ListSourceAssociationsTrait;
    use PromotePermissionCreatedFromPolicy\PromotePermissionCreatedFromPolicyTrait;
    use PromoteResourceShareCreatedFromPolicy\PromoteResourceShareCreatedFromPolicyTrait;
    use RejectResourceShareInvitation\RejectResourceShareInvitationTrait;
    use ReplacePermissionAssociations\ReplacePermissionAssociationsTrait;
    use SetDefaultPermissionVersion\SetDefaultPermissionVersionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateResourceShare\UpdateResourceShareTrait;
}
