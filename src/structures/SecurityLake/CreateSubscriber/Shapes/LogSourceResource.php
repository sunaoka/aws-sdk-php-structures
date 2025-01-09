<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsLogSourceResource $awsLogSource
 * @property CustomLogSourceResource $customLogSource
 */
class LogSourceResource extends Shape
{
    /**
     * @param array{
     *     awsLogSource?: AwsLogSourceResource,
     *     customLogSource?: CustomLogSourceResource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
