<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'Weekly'|'Monthly' $RenewType
 * @property ProvisionalConfiguration $ProvisionalConfiguration
 * @property BorrowConfiguration $BorrowConfiguration
 */
class ConsumptionConfiguration extends Shape
{
    /**
     * @param array{
     *     RenewType?: 'None'|'Weekly'|'Monthly',
     *     ProvisionalConfiguration?: ProvisionalConfiguration,
     *     BorrowConfiguration?: BorrowConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
