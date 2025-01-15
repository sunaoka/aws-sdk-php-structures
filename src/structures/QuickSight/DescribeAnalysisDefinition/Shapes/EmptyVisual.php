<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property string $DataSetIdentifier
 * @property list<VisualCustomAction>|null $Actions
 */
class EmptyVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     DataSetIdentifier: string,
     *     Actions?: list<VisualCustomAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
