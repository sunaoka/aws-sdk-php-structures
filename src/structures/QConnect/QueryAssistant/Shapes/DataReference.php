<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentReference $contentReference
 * @property GenerativeReference $generativeReference
 */
class DataReference extends Shape
{
    /**
     * @param array{
     *     contentReference?: ContentReference,
     *     generativeReference?: GenerativeReference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
