<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string|null $PlaceId
 * @property list<string>|null $Categories
 * @property list<string>|null $SupplementalCategories
 */
class SearchForSuggestionsResult extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     PlaceId?: string|null,
     *     Categories?: list<string>|null,
     *     SupplementalCategories?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
