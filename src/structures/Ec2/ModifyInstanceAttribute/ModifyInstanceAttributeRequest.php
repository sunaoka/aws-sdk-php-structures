<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttributeBooleanValue $SourceDestCheck
 * @property Shapes\AttributeBooleanValue $DisableApiStop
 * @property bool $DryRun
 * @property string $InstanceId
 * @property 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop' $Attribute
 * @property string $Value
 * @property list<Shapes\InstanceBlockDeviceMappingSpecification> $BlockDeviceMappings
 * @property Shapes\AttributeBooleanValue $DisableApiTermination
 * @property Shapes\AttributeValue $InstanceType
 * @property Shapes\AttributeValue $Kernel
 * @property Shapes\AttributeValue $Ramdisk
 * @property Shapes\BlobAttributeValue $UserData
 * @property Shapes\AttributeValue $InstanceInitiatedShutdownBehavior
 * @property list<string> $Groups
 * @property Shapes\AttributeBooleanValue $EbsOptimized
 * @property Shapes\AttributeValue $SriovNetSupport
 * @property Shapes\AttributeBooleanValue $EnaSupport
 */
class ModifyInstanceAttributeRequest extends Request
{
    /**
     * @param array{
     *     SourceDestCheck?: Shapes\AttributeBooleanValue,
     *     DisableApiStop?: Shapes\AttributeBooleanValue,
     *     DryRun?: bool,
     *     InstanceId: string,
     *     Attribute?: 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop',
     *     Value?: string,
     *     BlockDeviceMappings?: list<Shapes\InstanceBlockDeviceMappingSpecification>,
     *     DisableApiTermination?: Shapes\AttributeBooleanValue,
     *     InstanceType?: Shapes\AttributeValue,
     *     Kernel?: Shapes\AttributeValue,
     *     Ramdisk?: Shapes\AttributeValue,
     *     UserData?: Shapes\BlobAttributeValue,
     *     InstanceInitiatedShutdownBehavior?: Shapes\AttributeValue,
     *     Groups?: list<string>,
     *     EbsOptimized?: Shapes\AttributeBooleanValue,
     *     SriovNetSupport?: Shapes\AttributeValue,
     *     EnaSupport?: Shapes\AttributeBooleanValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
