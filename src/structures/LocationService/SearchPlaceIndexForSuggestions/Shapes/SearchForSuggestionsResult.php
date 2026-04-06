<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Categories
 * @property string|null $PlaceId
 * @property list<string>|null $SupplementalCategories
 * @property string $Text
 */
class SearchForSuggestionsResult extends Shape
{
    /**
     * @param array{
     *     Categories?: list<string>|null,
     *     PlaceId?: string|null,
     *     SupplementalCategories?: list<string>|null,
     *     Text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
