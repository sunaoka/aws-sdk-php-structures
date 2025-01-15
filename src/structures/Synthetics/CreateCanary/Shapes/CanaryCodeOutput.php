<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceLocationArn
 * @property string|null $Handler
 */
class CanaryCodeOutput extends Shape
{
    /**
     * @param array{
     *     SourceLocationArn?: string|null,
     *     Handler?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
