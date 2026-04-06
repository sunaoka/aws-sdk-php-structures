<?php

namespace Sunaoka\Aws\Structures\SSOAdmin;

class SSOAdminClient extends \Aws\SSOAdmin\SSOAdminClient
{
    use AttachCustomerManagedPolicyReferenceToPermissionSet\AttachCustomerManagedPolicyReferenceToPermissionSetTrait;
    use AttachManagedPolicyToPermissionSet\AttachManagedPolicyToPermissionSetTrait;
    use CreateAccountAssignment\CreateAccountAssignmentTrait;
    use CreateInstanceAccessControlAttributeConfiguration\CreateInstanceAccessControlAttributeConfigurationTrait;
    use CreatePermissionSet\CreatePermissionSetTrait;
    use DeleteAccountAssignment\DeleteAccountAssignmentTrait;
    use DeleteInlinePolicyFromPermissionSet\DeleteInlinePolicyFromPermissionSetTrait;
    use DeleteInstanceAccessControlAttributeConfiguration\DeleteInstanceAccessControlAttributeConfigurationTrait;
    use DeletePermissionSet\DeletePermissionSetTrait;
    use DeletePermissionsBoundaryFromPermissionSet\DeletePermissionsBoundaryFromPermissionSetTrait;
    use DescribeAccountAssignmentCreationStatus\DescribeAccountAssignmentCreationStatusTrait;
    use DescribeAccountAssignmentDeletionStatus\DescribeAccountAssignmentDeletionStatusTrait;
    use DescribeInstanceAccessControlAttributeConfiguration\DescribeInstanceAccessControlAttributeConfigurationTrait;
    use DescribePermissionSet\DescribePermissionSetTrait;
    use DescribePermissionSetProvisioningStatus\DescribePermissionSetProvisioningStatusTrait;
    use DetachCustomerManagedPolicyReferenceFromPermissionSet\DetachCustomerManagedPolicyReferenceFromPermissionSetTrait;
    use DetachManagedPolicyFromPermissionSet\DetachManagedPolicyFromPermissionSetTrait;
    use GetInlinePolicyForPermissionSet\GetInlinePolicyForPermissionSetTrait;
    use GetPermissionsBoundaryForPermissionSet\GetPermissionsBoundaryForPermissionSetTrait;
    use ListAccountAssignmentCreationStatus\ListAccountAssignmentCreationStatusTrait;
    use ListAccountAssignmentDeletionStatus\ListAccountAssignmentDeletionStatusTrait;
    use ListAccountAssignments\ListAccountAssignmentsTrait;
    use ListAccountsForProvisionedPermissionSet\ListAccountsForProvisionedPermissionSetTrait;
    use ListCustomerManagedPolicyReferencesInPermissionSet\ListCustomerManagedPolicyReferencesInPermissionSetTrait;
    use ListInstances\ListInstancesTrait;
    use ListManagedPoliciesInPermissionSet\ListManagedPoliciesInPermissionSetTrait;
    use ListPermissionSetProvisioningStatus\ListPermissionSetProvisioningStatusTrait;
    use ListPermissionSets\ListPermissionSetsTrait;
    use ListPermissionSetsProvisionedToAccount\ListPermissionSetsProvisionedToAccountTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ProvisionPermissionSet\ProvisionPermissionSetTrait;
    use PutInlinePolicyToPermissionSet\PutInlinePolicyToPermissionSetTrait;
    use PutPermissionsBoundaryToPermissionSet\PutPermissionsBoundaryToPermissionSetTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateInstanceAccessControlAttributeConfiguration\UpdateInstanceAccessControlAttributeConfigurationTrait;
    use UpdatePermissionSet\UpdatePermissionSetTrait;
}
