<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $VdmEnabled
 * @property DashboardAttributes $DashboardAttributes
 * @property GuardianAttributes $GuardianAttributes
 */
class VdmAttributes extends Shape
{
    /**
     * @param array{
     *     VdmEnabled: 'ENABLED'|'DISABLED',
     *     DashboardAttributes?: DashboardAttributes,
     *     GuardianAttributes?: GuardianAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
