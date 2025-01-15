<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListSubscribers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsLogSourceResource|null $awsLogSource
 * @property CustomLogSourceResource|null $customLogSource
 */
class LogSourceResource extends Shape
{
    /**
     * @param array{
     *     awsLogSource?: AwsLogSourceResource|null,
     *     customLogSource?: CustomLogSourceResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
