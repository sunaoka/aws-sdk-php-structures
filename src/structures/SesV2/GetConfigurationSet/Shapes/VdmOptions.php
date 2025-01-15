<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashboardOptions|null $DashboardOptions
 * @property GuardianOptions|null $GuardianOptions
 */
class VdmOptions extends Shape
{
    /**
     * @param array{
     *     DashboardOptions?: DashboardOptions|null,
     *     GuardianOptions?: GuardianOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
