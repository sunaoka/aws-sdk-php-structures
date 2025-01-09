<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationEbsVolumesResult $EbsVolumes
 */
class OrganizationScanEc2InstanceWithFindingsResult extends Shape
{
    /**
     * @param array{EbsVolumes?: OrganizationEbsVolumesResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
