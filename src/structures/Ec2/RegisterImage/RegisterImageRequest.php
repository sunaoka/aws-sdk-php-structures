<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageLocation
 * @property list<string> $BillingProducts
 * @property 'legacy-bios'|'uefi'|'uefi-preferred' $BootMode
 * @property 'v2.0' $TpmSupport
 * @property string $UefiData
 * @property 'v2.0' $ImdsSupport
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $Name
 * @property string $Description
 * @property 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac' $Architecture
 * @property string $KernelId
 * @property string $RamdiskId
 * @property string $RootDeviceName
 * @property list<Shapes\BlockDeviceMapping> $BlockDeviceMappings
 * @property string $VirtualizationType
 * @property string $SriovNetSupport
 * @property bool $EnaSupport
 */
class RegisterImageRequest extends Request
{
    /**
     * @param array{
     *     ImageLocation?: string,
     *     BillingProducts?: list<string>,
     *     BootMode?: 'legacy-bios'|'uefi'|'uefi-preferred',
     *     TpmSupport?: 'v2.0',
     *     UefiData?: string,
     *     ImdsSupport?: 'v2.0',
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     Name: string,
     *     Description?: string,
     *     Architecture?: 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac',
     *     KernelId?: string,
     *     RamdiskId?: string,
     *     RootDeviceName?: string,
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>,
     *     VirtualizationType?: string,
     *     SriovNetSupport?: string,
     *     EnaSupport?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
