<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QueryGenerationTable>|null $tables
 * @property list<CuratedQuery>|null $curatedQueries
 */
class QueryGenerationContext extends Shape
{
    /**
     * @param array{
     *     tables?: list<QueryGenerationTable>|null,
     *     curatedQueries?: list<CuratedQuery>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
