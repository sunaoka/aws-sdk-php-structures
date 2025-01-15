<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentReference|null $contentReference
 * @property GenerativeReference|null $generativeReference
 */
class DataReference extends Shape
{
    /**
     * @param array{
     *     contentReference?: ContentReference|null,
     *     generativeReference?: GenerativeReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
