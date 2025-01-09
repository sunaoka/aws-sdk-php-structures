<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identifier $MetricId
 * @property AggFunction $Function
 * @property list<Identifier> $Operands
 * @property TopicIRComparisonMethod $ComparisonMethod
 * @property string $Expression
 * @property list<Identifier> $CalculatedFieldReferences
 * @property 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING' $DisplayFormat
 * @property DisplayFormatOptions $DisplayFormatOptions
 * @property NamedEntityRef $NamedEntity
 */
class TopicIRMetric extends Shape
{
    /**
     * @param array{
     *     MetricId?: Identifier,
     *     Function?: AggFunction,
     *     Operands?: list<Identifier>,
     *     ComparisonMethod?: TopicIRComparisonMethod,
     *     Expression?: string,
     *     CalculatedFieldReferences?: list<Identifier>,
     *     DisplayFormat?: 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING',
     *     DisplayFormatOptions?: DisplayFormatOptions,
     *     NamedEntity?: NamedEntityRef
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
