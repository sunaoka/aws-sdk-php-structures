<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetCodeSnippet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string|null $code
 */
class SuggestedFix extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     code?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
