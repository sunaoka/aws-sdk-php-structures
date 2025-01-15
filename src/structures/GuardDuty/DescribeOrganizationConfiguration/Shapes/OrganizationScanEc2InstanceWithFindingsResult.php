<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationEbsVolumesResult|null $EbsVolumes
 */
class OrganizationScanEc2InstanceWithFindingsResult extends Shape
{
    /**
     * @param array{EbsVolumes?: OrganizationEbsVolumesResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
