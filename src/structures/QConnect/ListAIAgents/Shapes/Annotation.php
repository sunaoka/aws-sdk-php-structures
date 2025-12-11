<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $title
 * @property bool|null $destructiveHint
 */
class Annotation extends Shape
{
    /**
     * @param array{
     *     title?: string|null,
     *     destructiveHint?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
