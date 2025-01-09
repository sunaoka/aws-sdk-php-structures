<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListFeatures\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $defaultVariation
 * @property list<EvaluationRule> $evaluationRules
 * @property 'ALL_RULES'|'DEFAULT_VARIATION' $evaluationStrategy
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $name
 * @property string $project
 * @property 'AVAILABLE'|'UPDATING' $status
 * @property array<string, string> $tags
 */
class FeatureSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     defaultVariation?: string,
     *     evaluationRules?: list<EvaluationRule>,
     *     evaluationStrategy: 'ALL_RULES'|'DEFAULT_VARIATION',
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     project?: string,
     *     status: 'AVAILABLE'|'UPDATING',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
