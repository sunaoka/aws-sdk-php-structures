<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property list<Highlight>|null $highlights
 */
class DocumentText extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     highlights?: list<Highlight>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
