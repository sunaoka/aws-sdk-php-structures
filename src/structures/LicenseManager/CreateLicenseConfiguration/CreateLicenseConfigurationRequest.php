<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property 'vCPU'|'Instance'|'Core'|'Socket' $LicenseCountingType
 * @property int $LicenseCount
 * @property bool $LicenseCountHardLimit
 * @property list<string> $LicenseRules
 * @property list<Shapes\Tag> $Tags
 * @property bool $DisassociateWhenNotFound
 * @property list<Shapes\ProductInformation> $ProductInformationList
 */
class CreateLicenseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     LicenseCountingType: 'vCPU'|'Instance'|'Core'|'Socket',
     *     LicenseCount?: int,
     *     LicenseCountHardLimit?: bool,
     *     LicenseRules?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     DisassociateWhenNotFound?: bool,
     *     ProductInformationList?: list<Shapes\ProductInformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
