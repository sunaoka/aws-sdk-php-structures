<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CancelProfileUpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CountryCode
 * @property string $SubdivisionCode
 */
class Headquarters extends Shape
{
    /**
     * @param array{
     *     CountryCode: string,
     *     SubdivisionCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
