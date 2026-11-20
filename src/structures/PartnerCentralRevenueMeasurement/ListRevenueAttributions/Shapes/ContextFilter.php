<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListRevenueAttributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string>|null $Values
 */
class ContextFilter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
