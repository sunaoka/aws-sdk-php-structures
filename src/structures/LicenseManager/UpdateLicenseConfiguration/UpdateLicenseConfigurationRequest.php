<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConfigurationArn
 * @property 'AVAILABLE'|'DISABLED'|null $LicenseConfigurationStatus
 * @property list<string>|null $LicenseRules
 * @property int|null $LicenseCount
 * @property bool|null $LicenseCountHardLimit
 * @property string|null $Name
 * @property string|null $Description
 * @property list<Shapes\ProductInformation>|null $ProductInformationList
 * @property bool|null $DisassociateWhenNotFound
 * @property int|null $LicenseExpiry
 */
class UpdateLicenseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     LicenseConfigurationArn: string,
     *     LicenseConfigurationStatus?: 'AVAILABLE'|'DISABLED'|null,
     *     LicenseRules?: list<string>|null,
     *     LicenseCount?: int|null,
     *     LicenseCountHardLimit?: bool|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ProductInformationList?: list<Shapes\ProductInformation>|null,
     *     DisassociateWhenNotFound?: bool|null,
     *     LicenseExpiry?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
