<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PhonemeTranscription> $Country
 * @property list<PhonemeTranscription> $Region
 * @property list<PhonemeTranscription> $SubRegion
 * @property list<PhonemeTranscription> $Locality
 * @property list<PhonemeTranscription> $District
 * @property list<PhonemeTranscription> $SubDistrict
 * @property list<PhonemeTranscription> $Block
 * @property list<PhonemeTranscription> $SubBlock
 * @property list<PhonemeTranscription> $Street
 */
class AddressComponentPhonemes extends Shape
{
    /**
     * @param array{
     *     Country?: list<PhonemeTranscription>,
     *     Region?: list<PhonemeTranscription>,
     *     SubRegion?: list<PhonemeTranscription>,
     *     Locality?: list<PhonemeTranscription>,
     *     District?: list<PhonemeTranscription>,
     *     SubDistrict?: list<PhonemeTranscription>,
     *     Block?: list<PhonemeTranscription>,
     *     SubBlock?: list<PhonemeTranscription>,
     *     Street?: list<PhonemeTranscription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
