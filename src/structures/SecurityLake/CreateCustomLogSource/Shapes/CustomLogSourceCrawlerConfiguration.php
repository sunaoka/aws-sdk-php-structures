<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateCustomLogSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 */
class CustomLogSourceCrawlerConfiguration extends Shape
{
    /**
     * @param array{roleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
