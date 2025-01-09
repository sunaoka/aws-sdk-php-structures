<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $crawlerArn
 * @property string $databaseArn
 * @property string $tableArn
 */
class CustomLogSourceAttributes extends Shape
{
    /**
     * @param array{
     *     crawlerArn?: string,
     *     databaseArn?: string,
     *     tableArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
