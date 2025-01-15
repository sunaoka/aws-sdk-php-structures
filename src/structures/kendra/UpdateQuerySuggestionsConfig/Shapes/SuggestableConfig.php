<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property bool|null $Suggestable
 */
class SuggestableConfig extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     Suggestable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
