<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $generationId
 * @property string $modelId
 */
class GenerativeReference extends Shape
{
    /**
     * @param array{
     *     generationId?: string,
     *     modelId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
