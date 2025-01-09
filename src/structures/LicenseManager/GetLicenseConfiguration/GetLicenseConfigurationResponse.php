<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LicenseConfigurationId
 * @property string $LicenseConfigurationArn
 * @property string $Name
 * @property string $Description
 * @property 'vCPU'|'Instance'|'Core'|'Socket' $LicenseCountingType
 * @property list<string> $LicenseRules
 * @property int $LicenseCount
 * @property bool $LicenseCountHardLimit
 * @property int $ConsumedLicenses
 * @property string $Status
 * @property string $OwnerAccountId
 * @property list<Shapes\ConsumedLicenseSummary> $ConsumedLicenseSummaryList
 * @property list<Shapes\ManagedResourceSummary> $ManagedResourceSummaryList
 * @property list<Shapes\Tag> $Tags
 * @property list<Shapes\ProductInformation> $ProductInformationList
 * @property Shapes\AutomatedDiscoveryInformation $AutomatedDiscoveryInformation
 * @property bool $DisassociateWhenNotFound
 */
class GetLicenseConfigurationResponse extends Response
{
}
