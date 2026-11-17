<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\ListMemories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEMANTIC'|'SUMMARY'|'CUSTOM' $memoryType
 * @property list<string>|null $memoryStrategyNames
 */
class StrategySelector extends Shape
{
    /**
     * @param array{
     *     memoryType: 'SEMANTIC'|'SUMMARY'|'CUSTOM',
     *     memoryStrategyNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
