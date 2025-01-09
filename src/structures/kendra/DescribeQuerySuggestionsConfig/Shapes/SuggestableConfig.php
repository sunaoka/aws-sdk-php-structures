<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeQuerySuggestionsConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property bool $Suggestable
 */
class SuggestableConfig extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     Suggestable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
