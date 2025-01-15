<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoEnable
 */
class OrganizationEbsVolumesResult extends Shape
{
    /**
     * @param array{AutoEnable?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
