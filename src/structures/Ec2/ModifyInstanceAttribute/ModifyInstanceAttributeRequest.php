<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttributeBooleanValue|null $SourceDestCheck
 * @property 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop'|null $Attribute
 * @property list<Shapes\InstanceBlockDeviceMappingSpecification>|null $BlockDeviceMappings
 * @property Shapes\AttributeBooleanValue|null $DisableApiTermination
 * @property bool|null $DryRun
 * @property Shapes\AttributeBooleanValue|null $EbsOptimized
 * @property Shapes\AttributeBooleanValue|null $EnaSupport
 * @property list<string>|null $Groups
 * @property string $InstanceId
 * @property Shapes\AttributeValue|null $InstanceInitiatedShutdownBehavior
 * @property Shapes\AttributeValue|null $InstanceType
 * @property Shapes\AttributeValue|null $Kernel
 * @property Shapes\AttributeValue|null $Ramdisk
 * @property Shapes\AttributeValue|null $SriovNetSupport
 * @property Shapes\BlobAttributeValue|null $UserData
 * @property string|null $Value
 * @property Shapes\AttributeBooleanValue|null $DisableApiStop
 */
class ModifyInstanceAttributeRequest extends Request
{
    /**
     * @param array{
     *     SourceDestCheck?: Shapes\AttributeBooleanValue|null,
     *     Attribute?: 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop'|null,
     *     BlockDeviceMappings?: list<Shapes\InstanceBlockDeviceMappingSpecification>|null,
     *     DisableApiTermination?: Shapes\AttributeBooleanValue|null,
     *     DryRun?: bool|null,
     *     EbsOptimized?: Shapes\AttributeBooleanValue|null,
     *     EnaSupport?: Shapes\AttributeBooleanValue|null,
     *     Groups?: list<string>|null,
     *     InstanceId: string,
     *     InstanceInitiatedShutdownBehavior?: Shapes\AttributeValue|null,
     *     InstanceType?: Shapes\AttributeValue|null,
     *     Kernel?: Shapes\AttributeValue|null,
     *     Ramdisk?: Shapes\AttributeValue|null,
     *     SriovNetSupport?: Shapes\AttributeValue|null,
     *     UserData?: Shapes\BlobAttributeValue|null,
     *     Value?: string|null,
     *     DisableApiStop?: Shapes\AttributeBooleanValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
