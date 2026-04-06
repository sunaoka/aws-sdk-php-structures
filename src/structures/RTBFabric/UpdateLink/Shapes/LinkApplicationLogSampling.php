<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $errorLog
 * @property double $filterLog
 */
class LinkApplicationLogSampling extends Shape
{
    /**
     * @param array{
     *     errorLog: double,
     *     filterLog: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
