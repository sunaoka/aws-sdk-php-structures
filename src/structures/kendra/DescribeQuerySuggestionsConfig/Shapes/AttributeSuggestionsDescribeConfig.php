<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeQuerySuggestionsConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SuggestableConfig> $SuggestableConfigList
 * @property 'ACTIVE'|'INACTIVE' $AttributeSuggestionsMode
 */
class AttributeSuggestionsDescribeConfig extends Shape
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
