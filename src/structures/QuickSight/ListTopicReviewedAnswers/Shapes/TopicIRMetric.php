<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identifier|null $MetricId
 * @property AggFunction|null $Function
 * @property list<Identifier>|null $Operands
 * @property TopicIRComparisonMethod|null $ComparisonMethod
 * @property string|null $Expression
 * @property list<Identifier>|null $CalculatedFieldReferences
 * @property 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING'|null $DisplayFormat
 * @property DisplayFormatOptions|null $DisplayFormatOptions
 * @property NamedEntityRef|null $NamedEntity
 */
class TopicIRMetric extends Shape
{
    /**
     * @param array{
     *     MetricId?: Identifier|null,
     *     Function?: AggFunction|null,
     *     Operands?: list<Identifier>|null,
     *     ComparisonMethod?: TopicIRComparisonMethod|null,
     *     Expression?: string|null,
     *     CalculatedFieldReferences?: list<Identifier>|null,
     *     DisplayFormat?: 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING'|null,
     *     DisplayFormatOptions?: DisplayFormatOptions|null,
     *     NamedEntity?: NamedEntityRef|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
