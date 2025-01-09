<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string $PlaceId
 * @property list<string> $Categories
 * @property list<string> $SupplementalCategories
 */
class SearchForSuggestionsResult extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     PlaceId?: string,
     *     Categories?: list<string>,
     *     SupplementalCategories?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
