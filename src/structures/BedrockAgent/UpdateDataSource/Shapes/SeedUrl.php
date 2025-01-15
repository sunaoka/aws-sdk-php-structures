<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $url
 */
class SeedUrl extends Shape
{
    /**
     * @param array{url?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
