<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAnalyzers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'ACCOUNT'|'ORGANIZATION' $type
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastResourceAnalyzed
 * @property \Aws\Api\DateTimeResult|null $lastResourceAnalyzedAt
 * @property array<string, string>|null $tags
 * @property 'ACTIVE'|'CREATING'|'DISABLED'|'FAILED' $status
 * @property StatusReason|null $statusReason
 */
class AnalyzerSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     type: 'ACCOUNT'|'ORGANIZATION',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastResourceAnalyzed?: string|null,
     *     lastResourceAnalyzedAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null,
     *     status: 'ACTIVE'|'CREATING'|'DISABLED'|'FAILED',
     *     statusReason?: StatusReason|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
