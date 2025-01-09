<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksPodProperties $podProperties
 */
class EksProperties extends Shape
{
    /**
     * @param array{podProperties?: EksPodProperties} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
