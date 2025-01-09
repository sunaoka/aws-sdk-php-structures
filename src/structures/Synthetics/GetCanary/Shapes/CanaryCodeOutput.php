<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceLocationArn
 * @property string $Handler
 */
class CanaryCodeOutput extends Shape
{
    /**
     * @param array{
     *     SourceLocationArn?: string,
     *     Handler?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
