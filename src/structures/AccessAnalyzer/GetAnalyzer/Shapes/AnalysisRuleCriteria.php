<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accountIds
 * @property list<array<string, string>>|null $resourceTags
 */
class AnalysisRuleCriteria extends Shape
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     resourceTags?: list<array<string, string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
