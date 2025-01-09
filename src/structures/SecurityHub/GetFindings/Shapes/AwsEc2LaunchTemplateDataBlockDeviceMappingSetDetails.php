<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property AwsEc2LaunchTemplateDataBlockDeviceMappingSetEbsDetails $Ebs
 * @property string $NoDevice
 * @property string $VirtualName
 */
class AwsEc2LaunchTemplateDataBlockDeviceMappingSetDetails extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     Ebs?: AwsEc2LaunchTemplateDataBlockDeviceMappingSetEbsDetails,
     *     NoDevice?: string,
     *     VirtualName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
