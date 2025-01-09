<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $platformVersion
 */
class FargatePlatformConfiguration extends Shape
{
    /**
     * @param array{platformVersion?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
