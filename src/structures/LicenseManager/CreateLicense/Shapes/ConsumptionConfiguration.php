<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'Weekly'|'Monthly'|null $RenewType
 * @property ProvisionalConfiguration|null $ProvisionalConfiguration
 * @property BorrowConfiguration|null $BorrowConfiguration
 */
class ConsumptionConfiguration extends Shape
{
    /**
     * @param array{
     *     RenewType?: 'None'|'Weekly'|'Monthly'|null,
     *     ProvisionalConfiguration?: ProvisionalConfiguration|null,
     *     BorrowConfiguration?: BorrowConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
