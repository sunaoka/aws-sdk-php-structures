<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CuratedQuery>|null $curatedQueries
 * @property list<QueryGenerationTable>|null $tables
 */
class QueryGenerationContext extends Shape
{
    /**
     * @param array{
     *     curatedQueries?: list<CuratedQuery>|null,
     *     tables?: list<QueryGenerationTable>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
