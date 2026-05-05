<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RunCondition
 * @property string|null $FunctionId
 */
class FunctionRef extends Shape
{
    /**
     * @param array{
     *     RunCondition?: string|null,
     *     FunctionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
