<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CuratedQuery> $curatedQueries
 * @property list<QueryGenerationTable> $tables
 */
class QueryGenerationContext extends Shape
{
    /**
     * @param array{
     *     curatedQueries?: list<CuratedQuery>,
     *     tables?: list<QueryGenerationTable>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
