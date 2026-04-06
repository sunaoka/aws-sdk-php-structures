<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LambdaLayer'|null $Type
 * @property string $Reference
 */
class Dependency extends Shape
{
    /**
     * @param array{
     *     Type?: 'LambdaLayer'|null,
     *     Reference: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
