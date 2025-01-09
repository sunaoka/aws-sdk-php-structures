<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property string $DataSetIdentifier
 * @property list<VisualCustomAction> $Actions
 */
class EmptyVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     DataSetIdentifier: string,
     *     Actions?: list<VisualCustomAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
