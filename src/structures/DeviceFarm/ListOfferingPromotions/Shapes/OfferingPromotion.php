<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingPromotions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $description
 */
class OfferingPromotion extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
