<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<DataSetReference> $DataSetReferences
 * @property list<TopicReference>|null $TopicReferences
 */
class TemplateSourceAnalysis extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     DataSetReferences: list<DataSetReference>,
     *     TopicReferences?: list<TopicReference>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
