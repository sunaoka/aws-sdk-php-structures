<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAnalyzers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $accountIds
 * @property list<array<string, string>> $resourceTags
 */
class AnalysisRuleCriteria extends Shape
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     resourceTags?: list<array<string, string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
