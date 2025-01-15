<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlaceId
 * @property list<'TimeZone'|'Phonemes'|'Access'|'Contact'>|null $AdditionalFeatures
 * @property string|null $Language
 * @property string|null $PoliticalView
 * @property 'SingleUse'|'Storage'|null $IntendedUse
 * @property string|null $Key
 */
class GetPlaceRequest extends Request
{
    /**
     * @param array{
     *     PlaceId: string,
     *     AdditionalFeatures?: list<'TimeZone'|'Phonemes'|'Access'|'Contact'>|null,
     *     Language?: string|null,
     *     PoliticalView?: string|null,
     *     IntendedUse?: 'SingleUse'|'Storage'|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
