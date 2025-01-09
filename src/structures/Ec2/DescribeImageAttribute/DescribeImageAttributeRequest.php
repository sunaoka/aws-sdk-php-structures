<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'description'|'kernel'|'ramdisk'|'launchPermission'|'productCodes'|'blockDeviceMapping'|'sriovNetSupport'|'bootMode'|'tpmSupport'|'uefiData'|'lastLaunchedTime'|'imdsSupport'|'deregistrationProtection' $Attribute
 * @property string $ImageId
 * @property bool $DryRun
 */
class DescribeImageAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute: 'description'|'kernel'|'ramdisk'|'launchPermission'|'productCodes'|'blockDeviceMapping'|'sriovNetSupport'|'bootMode'|'tpmSupport'|'uefiData'|'lastLaunchedTime'|'imdsSupport'|'deregistrationProtection',
     *     ImageId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
