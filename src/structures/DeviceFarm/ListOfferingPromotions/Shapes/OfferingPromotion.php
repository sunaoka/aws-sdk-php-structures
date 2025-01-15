<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingPromotions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $description
 */
class OfferingPromotion extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
