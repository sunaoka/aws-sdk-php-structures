<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ReplayChildren
 * @property string|null $Result
 * @property ErrorObject|null $Error
 */
class ContextDetails extends Shape
{
    /**
     * @param array{
     *     ReplayChildren?: bool|null,
     *     Result?: string|null,
     *     Error?: ErrorObject|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
