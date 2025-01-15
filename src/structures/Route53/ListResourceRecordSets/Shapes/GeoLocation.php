<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContinentCode
 * @property string|null $CountryCode
 * @property string|null $SubdivisionCode
 */
class GeoLocation extends Shape
{
    /**
     * @param array{
     *     ContinentCode?: string|null,
     *     CountryCode?: string|null,
     *     SubdivisionCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
