<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SuggestableConfig> $SuggestableConfigList
 * @property 'ACTIVE'|'INACTIVE' $AttributeSuggestionsMode
 */
class AttributeSuggestionsUpdateConfig extends Shape
{
    /**
     * @param array{
     *     SuggestableConfigList?: list<SuggestableConfig>,
     *     AttributeSuggestionsMode?: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
