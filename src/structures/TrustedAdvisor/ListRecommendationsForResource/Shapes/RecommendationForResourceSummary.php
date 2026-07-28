<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendationsForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $checkArn
 * @property string $recommendationArn
 * @property string $awsResourceArn
 * @property 'ok'|'warning'|'error' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'excluded'|'included' $exclusionStatus
 * @property array<string, string> $metadata
 * @property list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'> $pillars
 */
class RecommendationForResourceSummary extends Shape
{
    /**
     * @param array{
     *     checkArn: string,
     *     recommendationArn: string,
     *     awsResourceArn: string,
     *     status: 'ok'|'warning'|'error',
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     exclusionStatus: 'excluded'|'included',
     *     metadata: array<string, string>,
     *     pillars: list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
