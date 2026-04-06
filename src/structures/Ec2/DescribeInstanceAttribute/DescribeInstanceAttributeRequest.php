<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop' $Attribute
 * @property bool|null $DryRun
 * @property string $InstanceId
 */
class DescribeInstanceAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute: 'instanceType'|'kernel'|'ramdisk'|'userData'|'disableApiTermination'|'instanceInitiatedShutdownBehavior'|'rootDeviceName'|'blockDeviceMapping'|'productCodes'|'sourceDestCheck'|'groupSet'|'ebsOptimized'|'sriovNetSupport'|'enaSupport'|'enclaveOptions'|'disableApiStop',
     *     DryRun?: bool|null,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
