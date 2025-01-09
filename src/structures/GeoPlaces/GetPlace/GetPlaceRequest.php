<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlaceId
 * @property list<'TimeZone'|'Phonemes'|'Access'|'Contact'> $AdditionalFeatures
 * @property string $Language
 * @property string $PoliticalView
 * @property 'SingleUse'|'Storage' $IntendedUse
 * @property string $Key
 */
class GetPlaceRequest extends Request
{
    /**
     * @param array{
     *     PlaceId: string,
     *     AdditionalFeatures?: list<'TimeZone'|'Phonemes'|'Access'|'Contact'>,
     *     Language?: string,
     *     PoliticalView?: string,
     *     IntendedUse?: 'SingleUse'|'Storage',
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
