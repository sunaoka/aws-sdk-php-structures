<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'|null $Architecture
 * @property string|null $CreationDate
 * @property string|null $ImageId
 * @property string|null $ImageLocation
 * @property 'machine'|'kernel'|'ramdisk'|null $ImageType
 * @property bool|null $Public
 * @property string|null $KernelId
 * @property string|null $OwnerId
 * @property 'Windows'|null $Platform
 * @property string|null $PlatformDetails
 * @property string|null $UsageOperation
 * @property list<ProductCode>|null $ProductCodes
 * @property string|null $RamdiskId
 * @property 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled'|null $State
 * @property list<BlockDeviceMapping>|null $BlockDeviceMappings
 * @property string|null $Description
 * @property bool|null $EnaSupport
 * @property 'ovm'|'xen'|null $Hypervisor
 * @property string|null $ImageOwnerAlias
 * @property string|null $Name
 * @property string|null $RootDeviceName
 * @property 'ebs'|'instance-store'|null $RootDeviceType
 * @property string|null $SriovNetSupport
 * @property StateReason|null $StateReason
 * @property list<Tag>|null $Tags
 * @property 'hvm'|'paravirtual'|null $VirtualizationType
 * @property 'legacy-bios'|'uefi'|'uefi-preferred'|null $BootMode
 * @property 'v2.0'|null $TpmSupport
 * @property string|null $DeprecationTime
 * @property 'v2.0'|null $ImdsSupport
 * @property string|null $SourceInstanceId
 * @property string|null $DeregistrationProtection
 * @property string|null $LastLaunchedTime
 */
class Image extends Shape
{
    /**
     * @param array{
     *     Architecture?: 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'|null,
     *     CreationDate?: string|null,
     *     ImageId?: string|null,
     *     ImageLocation?: string|null,
     *     ImageType?: 'machine'|'kernel'|'ramdisk'|null,
     *     Public?: bool|null,
     *     KernelId?: string|null,
     *     OwnerId?: string|null,
     *     Platform?: 'Windows'|null,
     *     PlatformDetails?: string|null,
     *     UsageOperation?: string|null,
     *     ProductCodes?: list<ProductCode>|null,
     *     RamdiskId?: string|null,
     *     State?: 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled'|null,
     *     BlockDeviceMappings?: list<BlockDeviceMapping>|null,
     *     Description?: string|null,
     *     EnaSupport?: bool|null,
     *     Hypervisor?: 'ovm'|'xen'|null,
     *     ImageOwnerAlias?: string|null,
     *     Name?: string|null,
     *     RootDeviceName?: string|null,
     *     RootDeviceType?: 'ebs'|'instance-store'|null,
     *     SriovNetSupport?: string|null,
     *     StateReason?: StateReason|null,
     *     Tags?: list<Tag>|null,
     *     VirtualizationType?: 'hvm'|'paravirtual'|null,
     *     BootMode?: 'legacy-bios'|'uefi'|'uefi-preferred'|null,
     *     TpmSupport?: 'v2.0'|null,
     *     DeprecationTime?: string|null,
     *     ImdsSupport?: 'v2.0'|null,
     *     SourceInstanceId?: string|null,
     *     DeregistrationProtection?: string|null,
     *     LastLaunchedTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
