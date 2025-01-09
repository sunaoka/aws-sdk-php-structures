<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PhonemeTranscription> $Title
 * @property AddressComponentPhonemes $Address
 */
class PhonemeDetails extends Shape
{
    /**
     * @param array{
     *     Title?: list<PhonemeTranscription>,
     *     Address?: AddressComponentPhonemes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
