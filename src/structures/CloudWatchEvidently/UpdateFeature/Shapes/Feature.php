<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $defaultVariation
 * @property string $description
 * @property array<string, string> $entityOverrides
 * @property list<EvaluationRule> $evaluationRules
 * @property 'ALL_RULES'|'DEFAULT_VARIATION' $evaluationStrategy
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $name
 * @property string $project
 * @property 'AVAILABLE'|'UPDATING' $status
 * @property array<string, string> $tags
 * @property 'STRING'|'LONG'|'DOUBLE'|'BOOLEAN' $valueType
 * @property list<Variation> $variations
 */
class Feature extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     defaultVariation?: string,
     *     description?: string,
     *     entityOverrides?: array<string, string>,
     *     evaluationRules?: list<EvaluationRule>,
     *     evaluationStrategy: 'ALL_RULES'|'DEFAULT_VARIATION',
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     project?: string,
     *     status: 'AVAILABLE'|'UPDATING',
     *     tags?: array<string, string>,
     *     valueType: 'STRING'|'LONG'|'DOUBLE'|'BOOLEAN',
     *     variations: list<Variation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
