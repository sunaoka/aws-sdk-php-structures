<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ImageLocation
 * @property 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'|null $Architecture
 * @property list<Shapes\BlockDeviceMapping>|null $BlockDeviceMappings
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property bool|null $EnaSupport
 * @property string|null $KernelId
 * @property string $Name
 * @property list<string>|null $BillingProducts
 * @property string|null $RamdiskId
 * @property string|null $RootDeviceName
 * @property string|null $SriovNetSupport
 * @property string|null $VirtualizationType
 * @property 'legacy-bios'|'uefi'|'uefi-preferred'|null $BootMode
 * @property 'v2.0'|null $TpmSupport
 * @property string|null $UefiData
 * @property 'v2.0'|null $ImdsSupport
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class RegisterImageRequest extends Request
{
    /**
     * @param array{
     *     ImageLocation?: string|null,
     *     Architecture?: 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'|null,
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>|null,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     EnaSupport?: bool|null,
     *     KernelId?: string|null,
     *     Name: string,
     *     BillingProducts?: list<string>|null,
     *     RamdiskId?: string|null,
     *     RootDeviceName?: string|null,
     *     SriovNetSupport?: string|null,
     *     VirtualizationType?: string|null,
     *     BootMode?: 'legacy-bios'|'uefi'|'uefi-preferred'|null,
     *     TpmSupport?: 'v2.0'|null,
     *     UefiData?: string|null,
     *     ImdsSupport?: 'v2.0'|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
