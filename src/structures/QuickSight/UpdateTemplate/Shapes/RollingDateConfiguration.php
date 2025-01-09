<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetIdentifier
 * @property string $Expression
 */
class RollingDateConfiguration extends Shape
{
    /**
     * @param array{
     *     DataSetIdentifier?: string,
     *     Expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
