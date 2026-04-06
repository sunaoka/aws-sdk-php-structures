<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LicenseConfigurationId
 * @property string|null $LicenseConfigurationArn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'vCPU'|'Instance'|'Core'|'Socket'|null $LicenseCountingType
 * @property list<string>|null $LicenseRules
 * @property int|null $LicenseCount
 * @property bool|null $LicenseCountHardLimit
 * @property int|null $ConsumedLicenses
 * @property string|null $Status
 * @property string|null $OwnerAccountId
 * @property list<Shapes\ConsumedLicenseSummary>|null $ConsumedLicenseSummaryList
 * @property list<Shapes\ManagedResourceSummary>|null $ManagedResourceSummaryList
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\ProductInformation>|null $ProductInformationList
 * @property Shapes\AutomatedDiscoveryInformation|null $AutomatedDiscoveryInformation
 * @property bool|null $DisassociateWhenNotFound
 */
class GetLicenseConfigurationResponse extends Response
{
}
