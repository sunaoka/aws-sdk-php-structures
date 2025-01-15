<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property string|null $Language
 * @property bool|null $Preferred
 */
class PhonemeTranscription extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Language?: string|null,
     *     Preferred?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
