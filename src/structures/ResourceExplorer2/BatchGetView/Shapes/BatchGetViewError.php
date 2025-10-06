<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\BatchGetView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViewArn
 * @property string $ErrorMessage
 */
class BatchGetViewError extends Shape
{
    /**
     * @param array{
     *     ViewArn: string,
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
