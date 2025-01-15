<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $regions
 * @property string|null $roleArn
 */
class DataLakeReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     regions?: list<string>|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
