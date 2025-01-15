<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $action
 * @property \Aws\Api\DateTimeResult|null $started
 * @property int|null $duration
 * @property string|null $statusCode
 * @property string|null $requestMethod
 */
class TestGridSessionAction extends Shape
{
    /**
     * @param array{
     *     action?: string|null,
     *     started?: \Aws\Api\DateTimeResult|null,
     *     duration?: int|null,
     *     statusCode?: string|null,
     *     requestMethod?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
