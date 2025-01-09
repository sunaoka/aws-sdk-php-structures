<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SuggestionAttributes
 * @property list<string> $AdditionalResponseAttributes
 * @property AttributeFilter $AttributeFilter
 * @property UserContext $UserContext
 */
class AttributeSuggestionsGetConfig extends Shape
{
    /**
     * @param array{
     *     SuggestionAttributes?: list<string>,
     *     AdditionalResponseAttributes?: list<string>,
     *     AttributeFilter?: AttributeFilter,
     *     UserContext?: UserContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
