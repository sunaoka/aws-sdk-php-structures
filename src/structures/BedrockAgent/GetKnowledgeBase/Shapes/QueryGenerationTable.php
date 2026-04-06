<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property 'INCLUDE'|'EXCLUDE'|null $inclusion
 * @property list<QueryGenerationColumn>|null $columns
 */
class QueryGenerationTable extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     inclusion?: 'INCLUDE'|'EXCLUDE'|null,
     *     columns?: list<QueryGenerationColumn>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
