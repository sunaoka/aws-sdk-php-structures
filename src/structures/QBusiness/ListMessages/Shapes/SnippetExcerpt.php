<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 */
class SnippetExcerpt extends Shape
{
    /**
     * @param array{text?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
