<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\BatchPutMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property string $errorCode
 * @property string $errorMessage
 */
class BatchPutMessageErrorEntry extends Shape
{
    /**
     * @param array{
     *     messageId?: string,
     *     errorCode?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
