<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property AwsAutoScalingLaunchConfigurationBlockDeviceMappingsEbsDetails $Ebs
 * @property bool $NoDevice
 * @property string $VirtualName
 */
class AwsAutoScalingLaunchConfigurationBlockDeviceMappingsDetails extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     Ebs?: AwsAutoScalingLaunchConfigurationBlockDeviceMappingsEbsDetails,
     *     NoDevice?: bool,
     *     VirtualName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
