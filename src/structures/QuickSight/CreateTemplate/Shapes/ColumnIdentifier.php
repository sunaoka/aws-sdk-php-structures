<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataSetIdentifier
 * @property string|null $TopicIdentifier
 * @property string $ColumnName
 */
class ColumnIdentifier extends Shape
{
    /**
     * @param array{
     *     DataSetIdentifier?: string|null,
     *     TopicIdentifier?: string|null,
     *     ColumnName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
