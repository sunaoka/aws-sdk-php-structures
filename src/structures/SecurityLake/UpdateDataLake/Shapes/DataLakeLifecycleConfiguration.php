<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeLifecycleExpiration|null $expiration
 * @property list<DataLakeLifecycleTransition>|null $transitions
 */
class DataLakeLifecycleConfiguration extends Shape
{
    /**
     * @param array{
     *     expiration?: DataLakeLifecycleExpiration|null,
     *     transitions?: list<DataLakeLifecycleTransition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
