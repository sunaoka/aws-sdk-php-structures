<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListLogSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $location
 * @property string $roleArn
 */
class CustomLogSourceProvider extends Shape
{
    /**
     * @param array{
     *     location?: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
