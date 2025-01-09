<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUEST_RESPONSE'|'FIRE_AND_FORGET' $InvocationType
 */
class PipeTargetLambdaFunctionParameters extends Shape
{
    /**
     * @param array{InvocationType?: 'REQUEST_RESPONSE'|'FIRE_AND_FORGET'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
