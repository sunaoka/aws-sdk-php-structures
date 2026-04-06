<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendationResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $awsResourceId
 * @property 'excluded'|'included'|null $exclusionStatus
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property array<string, string> $metadata
 * @property string $recommendationArn
 * @property string $regionCode
 * @property 'ok'|'warning'|'error' $status
 */
class RecommendationResourceSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     awsResourceId: string,
     *     exclusionStatus?: 'excluded'|'included'|null,
     *     id: string,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     metadata: array<string, string>,
     *     recommendationArn: string,
     *     regionCode: string,
     *     status: 'ok'|'warning'|'error'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
