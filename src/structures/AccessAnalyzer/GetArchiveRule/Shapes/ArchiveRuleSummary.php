<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetArchiveRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleName
 * @property array<string, Criterion> $filter
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ArchiveRuleSummary extends Shape
{
    /**
     * @param array{
     *     ruleName: string,
     *     filter: array<string, Criterion>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
