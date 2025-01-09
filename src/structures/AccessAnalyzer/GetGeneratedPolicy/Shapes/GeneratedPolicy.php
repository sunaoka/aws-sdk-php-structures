<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policy
 */
class GeneratedPolicy extends Shape
{
    /**
     * @param array{policy: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
