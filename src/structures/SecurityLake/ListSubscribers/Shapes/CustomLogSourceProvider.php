<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListSubscribers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $location
 * @property string|null $roleArn
 */
class CustomLogSourceProvider extends Shape
{
    /**
     * @param array{
     *     location?: string|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
