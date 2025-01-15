<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Batch|null $batch
 * @property TN3270|null $tn3270
 */
class MainframeActionType extends Shape
{
    /**
     * @param array{
     *     batch?: Batch|null,
     *     tn3270?: TN3270|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
