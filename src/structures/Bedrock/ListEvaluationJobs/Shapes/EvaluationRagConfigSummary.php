<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEvaluationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $bedrockKnowledgeBaseIdentifiers
 * @property list<string>|null $precomputedRagSourceIdentifiers
 */
class EvaluationRagConfigSummary extends Shape
{
    /**
     * @param array{
     *     bedrockKnowledgeBaseIdentifiers?: list<string>|null,
     *     precomputedRagSourceIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
