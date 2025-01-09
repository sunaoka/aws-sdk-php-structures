<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property 'Place'|'Query' $SuggestResultItemType
 * @property SuggestPlaceResult $Place
 * @property SuggestQueryResult $Query
 * @property SuggestHighlights $Highlights
 */
class SuggestResultItem extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     SuggestResultItemType: 'Place'|'Query',
     *     Place?: SuggestPlaceResult,
     *     Query?: SuggestQueryResult,
     *     Highlights?: SuggestHighlights
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
