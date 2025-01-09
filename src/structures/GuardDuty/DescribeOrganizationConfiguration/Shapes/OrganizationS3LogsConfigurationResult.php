<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoEnable
 */
class OrganizationS3LogsConfigurationResult extends Shape
{
    /**
     * @param array{AutoEnable: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
