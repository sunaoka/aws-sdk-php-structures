<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttributeBooleanValue|null $SourceDestCheck
 * @property Shapes\AttributeBooleanValue|null $DisableApiStop
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop'|null $Attribute
 * @property string|null $Value
 * @property list<Shapes\InstanceBlockDeviceMappingSpecification>|null $BlockDeviceMappings
 * @property Shapes\AttributeBooleanValue|null $DisableApiTermination
 * @property Shapes\AttributeValue|null $InstanceType
 * @property Shapes\AttributeValue|null $Kernel
 * @property Shapes\AttributeValue|null $Ramdisk
 * @property Shapes\BlobAttributeValue|null $UserData
 * @property Shapes\AttributeValue|null $InstanceInitiatedShutdownBehavior
 * @property list<string>|null $Groups
 * @property Shapes\AttributeBooleanValue|null $EbsOptimized
 * @property Shapes\AttributeValue|null $SriovNetSupport
 * @property Shapes\AttributeBooleanValue|null $EnaSupport
 */
class ModifyInstanceAttributeRequest extends Request
{
    /**
     * @param array{
     *     SourceDestCheck?: Shapes\AttributeBooleanValue|null,
     *     DisableApiStop?: Shapes\AttributeBooleanValue|null,
     *     DryRun?: bool|null,
     *     InstanceId: string,
     *     Attribute?: 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop'|null,
     *     Value?: string|null,
     *     BlockDeviceMappings?: list<Shapes\InstanceBlockDeviceMappingSpecification>|null,
     *     DisableApiTermination?: Shapes\AttributeBooleanValue|null,
     *     InstanceType?: Shapes\AttributeValue|null,
     *     Kernel?: Shapes\AttributeValue|null,
     *     Ramdisk?: Shapes\AttributeValue|null,
     *     UserData?: Shapes\BlobAttributeValue|null,
     *     InstanceInitiatedShutdownBehavior?: Shapes\AttributeValue|null,
     *     Groups?: list<string>|null,
     *     EbsOptimized?: Shapes\AttributeBooleanValue|null,
     *     SriovNetSupport?: Shapes\AttributeValue|null,
     *     EnaSupport?: Shapes\AttributeBooleanValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
