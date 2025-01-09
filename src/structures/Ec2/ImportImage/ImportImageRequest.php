<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Architecture
 * @property Shapes\ClientData $ClientData
 * @property string $ClientToken
 * @property string $Description
 * @property list<Shapes\ImageDiskContainer> $DiskContainers
 * @property bool $DryRun
 * @property bool $Encrypted
 * @property string $Hypervisor
 * @property string $KmsKeyId
 * @property string $LicenseType
 * @property string $Platform
 * @property string $RoleName
 * @property list<Shapes\ImportImageLicenseConfigurationRequest> $LicenseSpecifications
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $UsageOperation
 * @property 'legacy-bios'|'uefi'|'uefi-preferred' $BootMode
 */
class ImportImageRequest extends Request
{
    /**
     * @param array{
     *     Architecture?: string,
     *     ClientData?: Shapes\ClientData,
     *     ClientToken?: string,
     *     Description?: string,
     *     DiskContainers?: list<Shapes\ImageDiskContainer>,
     *     DryRun?: bool,
     *     Encrypted?: bool,
     *     Hypervisor?: string,
     *     KmsKeyId?: string,
     *     LicenseType?: string,
     *     Platform?: string,
     *     RoleName?: string,
     *     LicenseSpecifications?: list<Shapes\ImportImageLicenseConfigurationRequest>,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     UsageOperation?: string,
     *     BootMode?: 'legacy-bios'|'uefi'|'uefi-preferred'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
