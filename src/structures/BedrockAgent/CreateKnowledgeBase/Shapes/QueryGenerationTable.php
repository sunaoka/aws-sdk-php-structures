<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QueryGenerationColumn> $columns
 * @property string $description
 * @property 'INCLUDE'|'EXCLUDE' $inclusion
 * @property string $name
 */
class QueryGenerationTable extends Shape
{
    /**
     * @param array{
     *     columns?: list<QueryGenerationColumn>,
     *     description?: string,
     *     inclusion?: 'INCLUDE'|'EXCLUDE',
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
