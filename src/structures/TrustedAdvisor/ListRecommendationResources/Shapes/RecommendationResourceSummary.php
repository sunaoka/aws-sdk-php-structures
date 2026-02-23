<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendationResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $awsResourceId
 * @property string $regionCode
 * @property 'ok'|'warning'|'error' $status
 * @property array<string, string> $metadata
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'excluded'|'included'|null $exclusionStatus
 * @property string $recommendationArn
 */
class RecommendationResourceSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     awsResourceId: string,
     *     regionCode: string,
     *     status: 'ok'|'warning'|'error',
     *     metadata: array<string, string>,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     exclusionStatus?: 'excluded'|'included'|null,
     *     recommendationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
