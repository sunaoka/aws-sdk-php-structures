<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property 'Place'|'Query' $SuggestResultItemType
 * @property SuggestPlaceResult|null $Place
 * @property SuggestQueryResult|null $Query
 * @property SuggestHighlights|null $Highlights
 */
class SuggestResultItem extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     SuggestResultItemType: 'Place'|'Query',
     *     Place?: SuggestPlaceResult|null,
     *     Query?: SuggestQueryResult|null,
     *     Highlights?: SuggestHighlights|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
