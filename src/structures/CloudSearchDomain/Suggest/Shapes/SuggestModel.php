<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $query
 * @property int $found
 * @property list<SuggestionMatch> $suggestions
 */
class SuggestModel extends Shape
{
    /**
     * @param array{
     *     query?: string,
     *     found?: int,
     *     suggestions?: list<SuggestionMatch>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
