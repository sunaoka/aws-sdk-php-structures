<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Batch $batch
 * @property TN3270 $tn3270
 */
class MainframeActionType extends Shape
{
    /**
     * @param array{
     *     batch?: Batch,
     *     tn3270?: TN3270
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
