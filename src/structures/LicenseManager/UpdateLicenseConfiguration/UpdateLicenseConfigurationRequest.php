<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConfigurationArn
 * @property 'AVAILABLE'|'DISABLED' $LicenseConfigurationStatus
 * @property list<string> $LicenseRules
 * @property int $LicenseCount
 * @property bool $LicenseCountHardLimit
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\ProductInformation> $ProductInformationList
 * @property bool $DisassociateWhenNotFound
 */
class UpdateLicenseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     LicenseConfigurationArn: string,
     *     LicenseConfigurationStatus?: 'AVAILABLE'|'DISABLED',
     *     LicenseRules?: list<string>,
     *     LicenseCount?: int,
     *     LicenseCountHardLimit?: bool,
     *     Name?: string,
     *     Description?: string,
     *     ProductInformationList?: list<Shapes\ProductInformation>,
     *     DisassociateWhenNotFound?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
