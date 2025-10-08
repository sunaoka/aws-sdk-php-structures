<?php

namespace Sunaoka\Aws\Structures\LicenseManager;

class LicenseManagerClient extends \Aws\LicenseManager\LicenseManagerClient
{
    use AcceptGrant\AcceptGrantTrait;
    use CheckInLicense\CheckInLicenseTrait;
    use CheckoutBorrowLicense\CheckoutBorrowLicenseTrait;
    use CheckoutLicense\CheckoutLicenseTrait;
    use CreateGrant\CreateGrantTrait;
    use CreateGrantVersion\CreateGrantVersionTrait;
    use CreateLicense\CreateLicenseTrait;
    use CreateLicenseConfiguration\CreateLicenseConfigurationTrait;
    use CreateLicenseConversionTaskForResource\CreateLicenseConversionTaskForResourceTrait;
    use CreateLicenseManagerReportGenerator\CreateLicenseManagerReportGeneratorTrait;
    use CreateLicenseVersion\CreateLicenseVersionTrait;
    use CreateToken\CreateTokenTrait;
    use DeleteGrant\DeleteGrantTrait;
    use DeleteLicense\DeleteLicenseTrait;
    use DeleteLicenseConfiguration\DeleteLicenseConfigurationTrait;
    use DeleteLicenseManagerReportGenerator\DeleteLicenseManagerReportGeneratorTrait;
    use DeleteToken\DeleteTokenTrait;
    use ExtendLicenseConsumption\ExtendLicenseConsumptionTrait;
    use GetAccessToken\GetAccessTokenTrait;
    use GetGrant\GetGrantTrait;
    use GetLicense\GetLicenseTrait;
    use GetLicenseConfiguration\GetLicenseConfigurationTrait;
    use GetLicenseConversionTask\GetLicenseConversionTaskTrait;
    use GetLicenseManagerReportGenerator\GetLicenseManagerReportGeneratorTrait;
    use GetLicenseUsage\GetLicenseUsageTrait;
    use GetServiceSettings\GetServiceSettingsTrait;
    use ListAssociationsForLicenseConfiguration\ListAssociationsForLicenseConfigurationTrait;
    use ListDistributedGrants\ListDistributedGrantsTrait;
    use ListFailuresForLicenseConfigurationOperations\ListFailuresForLicenseConfigurationOperationsTrait;
    use ListLicenseConfigurations\ListLicenseConfigurationsTrait;
    use ListLicenseConversionTasks\ListLicenseConversionTasksTrait;
    use ListLicenseManagerReportGenerators\ListLicenseManagerReportGeneratorsTrait;
    use ListLicenseSpecificationsForResource\ListLicenseSpecificationsForResourceTrait;
    use ListLicenseVersions\ListLicenseVersionsTrait;
    use ListLicenses\ListLicensesTrait;
    use ListReceivedGrants\ListReceivedGrantsTrait;
    use ListReceivedGrantsForOrganization\ListReceivedGrantsForOrganizationTrait;
    use ListReceivedLicenses\ListReceivedLicensesTrait;
    use ListReceivedLicensesForOrganization\ListReceivedLicensesForOrganizationTrait;
    use ListResourceInventory\ListResourceInventoryTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTokens\ListTokensTrait;
    use ListUsageForLicenseConfiguration\ListUsageForLicenseConfigurationTrait;
    use RejectGrant\RejectGrantTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLicenseConfiguration\UpdateLicenseConfigurationTrait;
    use UpdateLicenseManagerReportGenerator\UpdateLicenseManagerReportGeneratorTrait;
    use UpdateLicenseSpecificationsForResource\UpdateLicenseSpecificationsForResourceTrait;
    use UpdateServiceSettings\UpdateServiceSettingsTrait;
}
