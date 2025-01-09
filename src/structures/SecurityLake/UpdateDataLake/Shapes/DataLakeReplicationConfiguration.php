<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $regions
 * @property string $roleArn
 */
class DataLakeReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     regions?: list<string>,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
