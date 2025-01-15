<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountVdmAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $VdmEnabled
 * @property DashboardAttributes|null $DashboardAttributes
 * @property GuardianAttributes|null $GuardianAttributes
 */
class VdmAttributes extends Shape
{
    /**
     * @param array{
     *     VdmEnabled: 'ENABLED'|'DISABLED',
     *     DashboardAttributes?: DashboardAttributes|null,
     *     GuardianAttributes?: GuardianAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
