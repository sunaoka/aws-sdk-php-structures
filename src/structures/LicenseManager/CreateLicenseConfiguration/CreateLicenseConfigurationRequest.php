<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'vCPU'|'Instance'|'Core'|'Socket' $LicenseCountingType
 * @property int|null $LicenseCount
 * @property bool|null $LicenseCountHardLimit
 * @property list<string>|null $LicenseRules
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $DisassociateWhenNotFound
 * @property list<Shapes\ProductInformation>|null $ProductInformationList
 * @property int|null $LicenseExpiry
 */
class CreateLicenseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     LicenseCountingType: 'vCPU'|'Instance'|'Core'|'Socket',
     *     LicenseCount?: int|null,
     *     LicenseCountHardLimit?: bool|null,
     *     LicenseRules?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DisassociateWhenNotFound?: bool|null,
     *     ProductInformationList?: list<Shapes\ProductInformation>|null,
     *     LicenseExpiry?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
