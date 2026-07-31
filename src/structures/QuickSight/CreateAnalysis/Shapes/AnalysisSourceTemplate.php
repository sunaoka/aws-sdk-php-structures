<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSetReference> $DataSetReferences
 * @property list<TopicReference>|null $TopicReferences
 * @property string $Arn
 */
class AnalysisSourceTemplate extends Shape
{
    /**
     * @param array{
     *     DataSetReferences: list<DataSetReference>,
     *     TopicReferences?: list<TopicReference>|null,
     *     Arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
