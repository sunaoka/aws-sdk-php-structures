<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QueryGenerationColumn>|null $columns
 * @property string|null $description
 * @property 'INCLUDE'|'EXCLUDE'|null $inclusion
 * @property string $name
 */
class QueryGenerationTable extends Shape
{
    /**
     * @param array{
     *     columns?: list<QueryGenerationColumn>|null,
     *     description?: string|null,
     *     inclusion?: 'INCLUDE'|'EXCLUDE'|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
