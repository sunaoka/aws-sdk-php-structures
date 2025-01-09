<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlatformDetails
 * @property string $UsageOperation
 * @property list<BlockDeviceMapping> $BlockDeviceMappings
 * @property string $Description
 * @property bool $EnaSupport
 * @property 'ovm'|'xen' $Hypervisor
 * @property string $ImageOwnerAlias
 * @property string $Name
 * @property string $RootDeviceName
 * @property 'ebs'|'instance-store' $RootDeviceType
 * @property string $SriovNetSupport
 * @property StateReason $StateReason
 * @property list<Tag> $Tags
 * @property 'hvm'|'paravirtual' $VirtualizationType
 * @property 'legacy-bios'|'uefi'|'uefi-preferred' $BootMode
 * @property 'v2.0' $TpmSupport
 * @property string $DeprecationTime
 * @property 'v2.0' $ImdsSupport
 * @property string $SourceInstanceId
 * @property string $DeregistrationProtection
 * @property string $LastLaunchedTime
 * @property bool $ImageAllowed
 * @property string $SourceImageId
 * @property string $SourceImageRegion
 * @property string $ImageId
 * @property string $ImageLocation
 * @property 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled' $State
 * @property string $OwnerId
 * @property string $CreationDate
 * @property bool $Public
 * @property list<ProductCode> $ProductCodes
 * @property 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac' $Architecture
 * @property 'machine'|'kernel'|'ramdisk' $ImageType
 * @property string $KernelId
 * @property string $RamdiskId
 * @property 'Windows' $Platform
 */
class Image extends Shape
{
    /**
     * @param array{
     *     PlatformDetails?: string,
     *     UsageOperation?: string,
     *     BlockDeviceMappings?: list<BlockDeviceMapping>,
     *     Description?: string,
     *     EnaSupport?: bool,
     *     Hypervisor?: 'ovm'|'xen',
     *     ImageOwnerAlias?: string,
     *     Name?: string,
     *     RootDeviceName?: string,
     *     RootDeviceType?: 'ebs'|'instance-store',
     *     SriovNetSupport?: string,
     *     StateReason?: StateReason,
     *     Tags?: list<Tag>,
     *     VirtualizationType?: 'hvm'|'paravirtual',
     *     BootMode?: 'legacy-bios'|'uefi'|'uefi-preferred',
     *     TpmSupport?: 'v2.0',
     *     DeprecationTime?: string,
     *     ImdsSupport?: 'v2.0',
     *     SourceInstanceId?: string,
     *     DeregistrationProtection?: string,
     *     LastLaunchedTime?: string,
     *     ImageAllowed?: bool,
     *     SourceImageId?: string,
     *     SourceImageRegion?: string,
     *     ImageId?: string,
     *     ImageLocation?: string,
     *     State?: 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled',
     *     OwnerId?: string,
     *     CreationDate?: string,
     *     Public?: bool,
     *     ProductCodes?: list<ProductCode>,
     *     Architecture?: 'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac',
     *     ImageType?: 'machine'|'kernel'|'ramdisk',
     *     KernelId?: string,
     *     RamdiskId?: string,
     *     Platform?: 'Windows'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
