<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property AwsEc2LaunchTemplateDataBlockDeviceMappingSetEbsDetails|null $Ebs
 * @property string|null $NoDevice
 * @property string|null $VirtualName
 */
class AwsEc2LaunchTemplateDataBlockDeviceMappingSetDetails extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     Ebs?: AwsEc2LaunchTemplateDataBlockDeviceMappingSetEbsDetails|null,
     *     NoDevice?: string|null,
     *     VirtualName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
