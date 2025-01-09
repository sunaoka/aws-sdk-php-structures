<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSetReference> $DataSetReferences
 * @property string $Arn
 */
class AnalysisSourceTemplate extends Shape
{
    /**
     * @param array{
     *     DataSetReferences: list<DataSetReference>,
     *     Arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
