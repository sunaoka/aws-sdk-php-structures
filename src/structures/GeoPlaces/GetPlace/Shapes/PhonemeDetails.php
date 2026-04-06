<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PhonemeTranscription>|null $Title
 * @property AddressComponentPhonemes|null $Address
 */
class PhonemeDetails extends Shape
{
    /**
     * @param array{
     *     Title?: list<PhonemeTranscription>|null,
     *     Address?: AddressComponentPhonemes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
