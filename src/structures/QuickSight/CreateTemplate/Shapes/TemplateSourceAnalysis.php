<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<DataSetReference> $DataSetReferences
 */
class TemplateSourceAnalysis extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     DataSetReferences: list<DataSetReference>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
