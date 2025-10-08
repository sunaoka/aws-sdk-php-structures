<?php

namespace Sunaoka\Aws\Structures\Organizations;

class OrganizationsClient extends \Aws\Organizations\OrganizationsClient
{
    use AcceptHandshake\AcceptHandshakeTrait;
    use AttachPolicy\AttachPolicyTrait;
    use CancelHandshake\CancelHandshakeTrait;
    use CloseAccount\CloseAccountTrait;
    use CreateAccount\CreateAccountTrait;
    use CreateGovCloudAccount\CreateGovCloudAccountTrait;
    use CreateOrganization\CreateOrganizationTrait;
    use CreateOrganizationalUnit\CreateOrganizationalUnitTrait;
    use CreatePolicy\CreatePolicyTrait;
    use DeclineHandshake\DeclineHandshakeTrait;
    use DeleteOrganization\DeleteOrganizationTrait;
    use DeleteOrganizationalUnit\DeleteOrganizationalUnitTrait;
    use DeletePolicy\DeletePolicyTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeregisterDelegatedAdministrator\DeregisterDelegatedAdministratorTrait;
    use DescribeAccount\DescribeAccountTrait;
    use DescribeCreateAccountStatus\DescribeCreateAccountStatusTrait;
    use DescribeEffectivePolicy\DescribeEffectivePolicyTrait;
    use DescribeHandshake\DescribeHandshakeTrait;
    use DescribeOrganization\DescribeOrganizationTrait;
    use DescribeOrganizationalUnit\DescribeOrganizationalUnitTrait;
    use DescribePolicy\DescribePolicyTrait;
    use DescribeResourcePolicy\DescribeResourcePolicyTrait;
    use DetachPolicy\DetachPolicyTrait;
    use DisableAWSServiceAccess\DisableAWSServiceAccessTrait;
    use DisablePolicyType\DisablePolicyTypeTrait;
    use EnableAWSServiceAccess\EnableAWSServiceAccessTrait;
    use EnableAllFeatures\EnableAllFeaturesTrait;
    use EnablePolicyType\EnablePolicyTypeTrait;
    use InviteAccountToOrganization\InviteAccountToOrganizationTrait;
    use LeaveOrganization\LeaveOrganizationTrait;
    use ListAWSServiceAccessForOrganization\ListAWSServiceAccessForOrganizationTrait;
    use ListAccounts\ListAccountsTrait;
    use ListAccountsForParent\ListAccountsForParentTrait;
    use ListAccountsWithInvalidEffectivePolicy\ListAccountsWithInvalidEffectivePolicyTrait;
    use ListChildren\ListChildrenTrait;
    use ListCreateAccountStatus\ListCreateAccountStatusTrait;
    use ListDelegatedAdministrators\ListDelegatedAdministratorsTrait;
    use ListDelegatedServicesForAccount\ListDelegatedServicesForAccountTrait;
    use ListEffectivePolicyValidationErrors\ListEffectivePolicyValidationErrorsTrait;
    use ListHandshakesForAccount\ListHandshakesForAccountTrait;
    use ListHandshakesForOrganization\ListHandshakesForOrganizationTrait;
    use ListOrganizationalUnitsForParent\ListOrganizationalUnitsForParentTrait;
    use ListParents\ListParentsTrait;
    use ListPolicies\ListPoliciesTrait;
    use ListPoliciesForTarget\ListPoliciesForTargetTrait;
    use ListRoots\ListRootsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTargetsForPolicy\ListTargetsForPolicyTrait;
    use MoveAccount\MoveAccountTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RegisterDelegatedAdministrator\RegisterDelegatedAdministratorTrait;
    use RemoveAccountFromOrganization\RemoveAccountFromOrganizationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateOrganizationalUnit\UpdateOrganizationalUnitTrait;
    use UpdatePolicy\UpdatePolicyTrait;
}
