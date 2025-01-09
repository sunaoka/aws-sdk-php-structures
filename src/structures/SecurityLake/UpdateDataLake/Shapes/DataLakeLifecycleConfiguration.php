<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeLifecycleExpiration $expiration
 * @property list<DataLakeLifecycleTransition> $transitions
 */
class DataLakeLifecycleConfiguration extends Shape
{
    /**
     * @param array{
     *     expiration?: DataLakeLifecycleExpiration,
     *     transitions?: list<DataLakeLifecycleTransition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
