<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Architecture
 * @property Shapes\ClientData|null $ClientData
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property list<Shapes\ImageDiskContainer>|null $DiskContainers
 * @property bool|null $DryRun
 * @property bool|null $Encrypted
 * @property string|null $Hypervisor
 * @property string|null $KmsKeyId
 * @property string|null $LicenseType
 * @property string|null $Platform
 * @property string|null $RoleName
 * @property list<Shapes\ImportImageLicenseConfigurationRequest>|null $LicenseSpecifications
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $UsageOperation
 * @property 'legacy-bios'|'uefi'|'uefi-preferred'|null $BootMode
 */
class ImportImageRequest extends Request
{
    /**
     * @param array{
     *     Architecture?: string|null,
     *     ClientData?: Shapes\ClientData|null,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     DiskContainers?: list<Shapes\ImageDiskContainer>|null,
     *     DryRun?: bool|null,
     *     Encrypted?: bool|null,
     *     Hypervisor?: string|null,
     *     KmsKeyId?: string|null,
     *     LicenseType?: string|null,
     *     Platform?: string|null,
     *     RoleName?: string|null,
     *     LicenseSpecifications?: list<Shapes\ImportImageLicenseConfigurationRequest>|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     UsageOperation?: string|null,
     *     BootMode?: 'legacy-bios'|'uefi'|'uefi-preferred'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
