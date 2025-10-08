<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $strategyId
 * @property string $name
 * @property string|null $description
 * @property StrategyConfiguration|null $configuration
 * @property 'SEMANTIC'|'SUMMARIZATION'|'USER_PREFERENCE'|'CUSTOM' $type
 * @property list<string> $namespaces
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $status
 */
class MemoryStrategy extends Shape
{
    /**
     * @param array{
     *     strategyId: string,
     *     name: string,
     *     description?: string|null,
     *     configuration?: StrategyConfiguration|null,
     *     type: 'SEMANTIC'|'SUMMARIZATION'|'USER_PREFERENCE'|'CUSTOM',
     *     namespaces: list<string>,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
