<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property string|null $DataSetIdentifier
 * @property string|null $TopicIdentifier
 * @property list<VisualCustomAction>|null $Actions
 */
class EmptyVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     DataSetIdentifier?: string|null,
     *     TopicIdentifier?: string|null,
     *     Actions?: list<VisualCustomAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
