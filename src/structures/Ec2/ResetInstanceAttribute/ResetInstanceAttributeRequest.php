<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetInstanceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InstanceId
 * @property 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop' $Attribute
 */
class ResetInstanceAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceId: string,
     *     Attribute: 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
