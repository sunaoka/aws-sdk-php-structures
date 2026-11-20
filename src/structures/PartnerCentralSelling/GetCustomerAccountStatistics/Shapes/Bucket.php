<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccountStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Values
 * @property int $Count
 */
class Bucket extends Shape
{
    /**
     * @param array{
     *     Values: list<string>,
     *     Count: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
