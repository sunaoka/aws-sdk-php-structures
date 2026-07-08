<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property string|null $Language
 * @property 'Abbreviation'|'AreaCode'|'BaseName'|'Exonym'|'Shortened'|'Synonym' $Type
 * @property bool|null $Primary
 * @property bool|null $Transliterated
 */
class TranslationName extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Language?: string|null,
     *     Type: 'Abbreviation'|'AreaCode'|'BaseName'|'Exonym'|'Shortened'|'Synonym',
     *     Primary?: bool|null,
     *     Transliterated?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
