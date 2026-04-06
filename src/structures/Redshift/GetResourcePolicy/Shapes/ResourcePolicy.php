<?php

namespace Sunaoka\Aws\Structures\Redshift\GetResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $Policy
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     Policy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
