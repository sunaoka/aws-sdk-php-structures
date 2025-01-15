<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight>|null $highlights
 * @property string|null $text
 */
class DocumentText extends Shape
{
    /**
     * @param array{
     *     highlights?: list<Highlight>|null,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
