<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $crawlerArn
 * @property string|null $databaseArn
 * @property string|null $tableArn
 */
class CustomLogSourceAttributes extends Shape
{
    /**
     * @param array{
     *     crawlerArn?: string|null,
     *     databaseArn?: string|null,
     *     tableArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
