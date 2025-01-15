<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $query
 * @property int|null $found
 * @property list<SuggestionMatch>|null $suggestions
 */
class SuggestModel extends Shape
{
    /**
     * @param array{
     *     query?: string|null,
     *     found?: int|null,
     *     suggestions?: list<SuggestionMatch>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
