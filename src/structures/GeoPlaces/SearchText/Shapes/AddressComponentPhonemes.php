<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PhonemeTranscription>|null $Country
 * @property list<PhonemeTranscription>|null $Region
 * @property list<PhonemeTranscription>|null $SubRegion
 * @property list<PhonemeTranscription>|null $Locality
 * @property list<PhonemeTranscription>|null $District
 * @property list<PhonemeTranscription>|null $SubDistrict
 * @property list<PhonemeTranscription>|null $Block
 * @property list<PhonemeTranscription>|null $SubBlock
 * @property list<PhonemeTranscription>|null $Street
 */
class AddressComponentPhonemes extends Shape
{
    /**
     * @param array{
     *     Country?: list<PhonemeTranscription>|null,
     *     Region?: list<PhonemeTranscription>|null,
     *     SubRegion?: list<PhonemeTranscription>|null,
     *     Locality?: list<PhonemeTranscription>|null,
     *     District?: list<PhonemeTranscription>|null,
     *     SubDistrict?: list<PhonemeTranscription>|null,
     *     Block?: list<PhonemeTranscription>|null,
     *     SubBlock?: list<PhonemeTranscription>|null,
     *     Street?: list<PhonemeTranscription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
