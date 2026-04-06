<?php

namespace Sunaoka\Aws\Structures\Inspector2;

class Inspector2Client extends \Aws\Inspector2\Inspector2Client
{
    use AssociateMember\AssociateMemberTrait;
    use BatchGetAccountStatus\BatchGetAccountStatusTrait;
    use BatchGetCodeSnippet\BatchGetCodeSnippetTrait;
    use BatchGetFindingDetails\BatchGetFindingDetailsTrait;
    use BatchGetFreeTrialInfo\BatchGetFreeTrialInfoTrait;
    use BatchGetMemberEc2DeepInspectionStatus\BatchGetMemberEc2DeepInspectionStatusTrait;
    use BatchUpdateMemberEc2DeepInspectionStatus\BatchUpdateMemberEc2DeepInspectionStatusTrait;
    use CancelFindingsReport\CancelFindingsReportTrait;
    use CancelSbomExport\CancelSbomExportTrait;
    use CreateFilter\CreateFilterTrait;
    use CreateFindingsReport\CreateFindingsReportTrait;
    use CreateSbomExport\CreateSbomExportTrait;
    use DeleteFilter\DeleteFilterTrait;
    use DescribeOrganizationConfiguration\DescribeOrganizationConfigurationTrait;
    use Disable\DisableTrait;
    use DisableDelegatedAdminAccount\DisableDelegatedAdminAccountTrait;
    use DisassociateMember\DisassociateMemberTrait;
    use Enable\EnableTrait;
    use EnableDelegatedAdminAccount\EnableDelegatedAdminAccountTrait;
    use GetConfiguration\GetConfigurationTrait;
    use GetDelegatedAdminAccount\GetDelegatedAdminAccountTrait;
    use GetEc2DeepInspectionConfiguration\GetEc2DeepInspectionConfigurationTrait;
    use GetEncryptionKey\GetEncryptionKeyTrait;
    use GetFindingsReportStatus\GetFindingsReportStatusTrait;
    use GetMember\GetMemberTrait;
    use GetSbomExport\GetSbomExportTrait;
    use ListAccountPermissions\ListAccountPermissionsTrait;
    use ListCoverage\ListCoverageTrait;
    use ListCoverageStatistics\ListCoverageStatisticsTrait;
    use ListDelegatedAdminAccounts\ListDelegatedAdminAccountsTrait;
    use ListFilters\ListFiltersTrait;
    use ListFindingAggregations\ListFindingAggregationsTrait;
    use ListFindings\ListFindingsTrait;
    use ListMembers\ListMembersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListUsageTotals\ListUsageTotalsTrait;
    use ResetEncryptionKey\ResetEncryptionKeyTrait;
    use SearchVulnerabilities\SearchVulnerabilitiesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConfiguration\UpdateConfigurationTrait;
    use UpdateEc2DeepInspectionConfiguration\UpdateEc2DeepInspectionConfigurationTrait;
    use UpdateEncryptionKey\UpdateEncryptionKeyTrait;
    use UpdateFilter\UpdateFilterTrait;
    use UpdateOrgEc2DeepInspectionConfiguration\UpdateOrgEc2DeepInspectionConfigurationTrait;
    use UpdateOrganizationConfiguration\UpdateOrganizationConfigurationTrait;
}
