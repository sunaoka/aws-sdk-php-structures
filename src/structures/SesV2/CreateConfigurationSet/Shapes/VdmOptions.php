<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashboardOptions $DashboardOptions
 * @property GuardianOptions $GuardianOptions
 */
class VdmOptions extends Shape
{
    /**
     * @param array{
     *     DashboardOptions?: DashboardOptions,
     *     GuardianOptions?: GuardianOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
