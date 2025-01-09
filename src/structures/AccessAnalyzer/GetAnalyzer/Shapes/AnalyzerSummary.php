<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS' $type
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $lastResourceAnalyzed
 * @property \Aws\Api\DateTimeResult $lastResourceAnalyzedAt
 * @property array<string, string> $tags
 * @property 'ACTIVE'|'CREATING'|'DISABLED'|'FAILED' $status
 * @property StatusReason $statusReason
 * @property AnalyzerConfiguration $configuration
 */
class AnalyzerSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     type: 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastResourceAnalyzed?: string,
     *     lastResourceAnalyzedAt?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>,
     *     status: 'ACTIVE'|'CREATING'|'DISABLED'|'FAILED',
     *     statusReason?: StatusReason,
     *     configuration?: AnalyzerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
