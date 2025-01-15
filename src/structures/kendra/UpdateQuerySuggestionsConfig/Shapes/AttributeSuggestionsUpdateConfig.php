<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SuggestableConfig>|null $SuggestableConfigList
 * @property 'ACTIVE'|'INACTIVE'|null $AttributeSuggestionsMode
 */
class AttributeSuggestionsUpdateConfig extends Shape
{
    /**
     * @param array{
     *     SuggestableConfigList?: list<SuggestableConfig>|null,
     *     AttributeSuggestionsMode?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
