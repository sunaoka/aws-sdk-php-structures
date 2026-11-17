<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEMANTIC'|'SUMMARY'|'CUSTOM' $type
 * @property string|null $name
 * @property string|null $description
 * @property MemoryStrategyConfiguration|null $configuration
 */
class MemoryStrategy extends Shape
{
    /**
     * @param array{
     *     type: 'SEMANTIC'|'SUMMARY'|'CUSTOM',
     *     name?: string|null,
     *     description?: string|null,
     *     configuration?: MemoryStrategyConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
