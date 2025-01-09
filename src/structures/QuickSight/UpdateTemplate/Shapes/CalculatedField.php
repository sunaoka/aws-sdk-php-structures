<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetIdentifier
 * @property string $Name
 * @property string $Expression
 */
class CalculatedField extends Shape
{
    /**
     * @param array{
     *     DataSetIdentifier: string,
     *     Name: string,
     *     Expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
