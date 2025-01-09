<?php

namespace Sunaoka\Aws\Structures\Redshift\GetResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string $Policy
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     Policy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
