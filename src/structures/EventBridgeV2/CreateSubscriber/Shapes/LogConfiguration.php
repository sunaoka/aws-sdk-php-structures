<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'ERROR'|'INFO'|null $Level
 * @property 'FULL'|'ON_ERROR_ONLY'|null $IncludePayload
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     Level?: 'OFF'|'ERROR'|'INFO'|null,
     *     IncludePayload?: 'FULL'|'ON_ERROR_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
