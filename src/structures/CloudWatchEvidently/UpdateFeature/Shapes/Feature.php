<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string|null $defaultVariation
 * @property string|null $description
 * @property array<string, string>|null $entityOverrides
 * @property list<EvaluationRule>|null $evaluationRules
 * @property 'ALL_RULES'|'DEFAULT_VARIATION' $evaluationStrategy
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $name
 * @property string|null $project
 * @property 'AVAILABLE'|'UPDATING' $status
 * @property array<string, string>|null $tags
 * @property 'STRING'|'LONG'|'DOUBLE'|'BOOLEAN' $valueType
 * @property list<Variation> $variations
 */
class Feature extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     defaultVariation?: string|null,
     *     description?: string|null,
     *     entityOverrides?: array<string, string>|null,
     *     evaluationRules?: list<EvaluationRule>|null,
     *     evaluationStrategy: 'ALL_RULES'|'DEFAULT_VARIATION',
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     project?: string|null,
     *     status: 'AVAILABLE'|'UPDATING',
     *     tags?: array<string, string>|null,
     *     valueType: 'STRING'|'LONG'|'DOUBLE'|'BOOLEAN',
     *     variations: list<Variation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
