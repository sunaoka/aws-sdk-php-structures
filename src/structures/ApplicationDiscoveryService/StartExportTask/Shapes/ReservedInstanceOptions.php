<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL_UPFRONT'|'PARTIAL_UPFRONT'|'NO_UPFRONT' $purchasingOption
 * @property 'STANDARD'|'CONVERTIBLE' $offeringClass
 * @property 'ONE_YEAR'|'THREE_YEAR' $termLength
 */
class ReservedInstanceOptions extends Shape
{
    /**
     * @param array{
     *     purchasingOption: 'ALL_UPFRONT'|'PARTIAL_UPFRONT'|'NO_UPFRONT',
     *     offeringClass: 'STANDARD'|'CONVERTIBLE',
     *     termLength: 'ONE_YEAR'|'THREE_YEAR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
