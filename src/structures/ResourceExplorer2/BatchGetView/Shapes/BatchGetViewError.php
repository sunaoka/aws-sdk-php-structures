<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\BatchGetView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorMessage
 * @property string $ViewArn
 */
class BatchGetViewError extends Shape
{
    /**
     * @param array{
     *     ErrorMessage: string,
     *     ViewArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
