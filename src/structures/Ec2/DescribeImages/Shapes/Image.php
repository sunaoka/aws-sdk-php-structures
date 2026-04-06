<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlatformDetails
 * @property string|null $UsageOperation
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
 * @property bool|null $ImageAllowed
 * @property string|null $SourceImageId
 * @property string|null $SourceImageRegion
 * @property bool|null $FreeTierEligible
 * @property string|null $ImageId
 * @property string|null $ImageLocation
 * @property 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled'|null $State
 * @property string|null $OwnerId
 * @property string|null $CreationDate
 * @property bool|null $Public
 * @property list<ProductCode>|null $ProductCodes
 * @property 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'|null $Architecture
 * @property 'machine'|'kernel'|'ramdisk'|null $ImageType
 * @property string|null $KernelId
 * @property string|null $RamdiskId
 * @property 'Windows'|null $Platform
 */
class Image extends Shape
{
    /**
     * @param array{
     *     PlatformDetails?: string|null,
     *     UsageOperation?: string|null,
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
     *     LastLaunchedTime?: string|null,
     *     ImageAllowed?: bool|null,
     *     SourceImageId?: string|null,
     *     SourceImageRegion?: string|null,
     *     FreeTierEligible?: bool|null,
     *     ImageId?: string|null,
     *     ImageLocation?: string|null,
     *     State?: 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled'|null,
     *     OwnerId?: string|null,
     *     CreationDate?: string|null,
     *     Public?: bool|null,
     *     ProductCodes?: list<ProductCode>|null,
     *     Architecture?: 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'|null,
     *     ImageType?: 'machine'|'kernel'|'ramdisk'|null,
     *     KernelId?: string|null,
     *     RamdiskId?: string|null,
     *     Platform?: 'Windows'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
