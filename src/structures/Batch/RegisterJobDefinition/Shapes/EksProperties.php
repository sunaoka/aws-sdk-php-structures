<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksPodProperties|null $podProperties
 */
class EksProperties extends Shape
{
    /**
     * @param array{podProperties?: EksPodProperties|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
