<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property string $Language
 * @property bool $Preferred
 */
class PhonemeTranscription extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Language?: string,
     *     Preferred?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
