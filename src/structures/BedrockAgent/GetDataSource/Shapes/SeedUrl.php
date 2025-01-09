<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 */
class SeedUrl extends Shape
{
    /**
     * @param array{url?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
