<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ImageLocation
 * @property list<string>|null $BillingProducts
 * @property 'legacy-bios'|'uefi'|'uefi-preferred'|null $BootMode
 * @property 'v2.0'|null $TpmSupport
 * @property string|null $UefiData
 * @property 'v2.0'|null $ImdsSupport
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string $Name
 * @property string|null $Description
 * @property 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'|null $Architecture
 * @property string|null $KernelId
 * @property string|null $RamdiskId
 * @property string|null $RootDeviceName
 * @property list<Shapes\BlockDeviceMapping>|null $BlockDeviceMappings
 * @property string|null $VirtualizationType
 * @property string|null $SriovNetSupport
 * @property bool|null $EnaSupport
 */
class RegisterImageRequest extends Request
{
    /**
     * @param array{
     *     ImageLocation?: string|null,
     *     BillingProducts?: list<string>|null,
     *     BootMode?: 'legacy-bios'|'uefi'|'uefi-preferred'|null,
     *     TpmSupport?: 'v2.0'|null,
     *     UefiData?: string|null,
     *     ImdsSupport?: 'v2.0'|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     Name: string,
     *     Description?: string|null,
     *     Architecture?: 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'|null,
     *     KernelId?: string|null,
     *     RamdiskId?: string|null,
     *     RootDeviceName?: string|null,
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>|null,
     *     VirtualizationType?: string|null,
     *     SriovNetSupport?: string|null,
     *     EnaSupport?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
