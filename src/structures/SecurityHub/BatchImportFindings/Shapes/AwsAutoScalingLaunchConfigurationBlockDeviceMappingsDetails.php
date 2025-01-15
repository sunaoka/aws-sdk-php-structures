<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property AwsAutoScalingLaunchConfigurationBlockDeviceMappingsEbsDetails|null $Ebs
 * @property bool|null $NoDevice
 * @property string|null $VirtualName
 */
class AwsAutoScalingLaunchConfigurationBlockDeviceMappingsDetails extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     Ebs?: AwsAutoScalingLaunchConfigurationBlockDeviceMappingsEbsDetails|null,
     *     NoDevice?: bool|null,
     *     VirtualName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
