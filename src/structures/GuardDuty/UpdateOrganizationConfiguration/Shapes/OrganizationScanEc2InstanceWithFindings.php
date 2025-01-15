<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationEbsVolumes|null $EbsVolumes
 */
class OrganizationScanEc2InstanceWithFindings extends Shape
{
    /**
     * @param array{EbsVolumes?: OrganizationEbsVolumes|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
