<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property \Aws\Api\DateTimeResult $started
 * @property int $duration
 * @property string $statusCode
 * @property string $requestMethod
 */
class TestGridSessionAction extends Shape
{
    /**
     * @param array{
     *     action?: string,
     *     started?: \Aws\Api\DateTimeResult,
     *     duration?: int,
     *     statusCode?: string,
     *     requestMethod?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
