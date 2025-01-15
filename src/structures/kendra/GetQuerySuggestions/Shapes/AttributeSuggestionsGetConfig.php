<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SuggestionAttributes
 * @property list<string>|null $AdditionalResponseAttributes
 * @property AttributeFilter|null $AttributeFilter
 * @property UserContext|null $UserContext
 */
class AttributeSuggestionsGetConfig extends Shape
{
    /**
     * @param array{
     *     SuggestionAttributes?: list<string>|null,
     *     AdditionalResponseAttributes?: list<string>|null,
     *     AttributeFilter?: AttributeFilter|null,
     *     UserContext?: UserContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
