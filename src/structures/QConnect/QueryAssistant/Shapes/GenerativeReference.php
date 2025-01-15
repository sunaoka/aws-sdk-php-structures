<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $generationId
 * @property string|null $modelId
 */
class GenerativeReference extends Shape
{
    /**
     * @param array{
     *     generationId?: string|null,
     *     modelId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
