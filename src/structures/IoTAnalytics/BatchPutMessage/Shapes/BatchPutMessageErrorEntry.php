<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\BatchPutMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $messageId
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class BatchPutMessageErrorEntry extends Shape
{
    /**
     * @param array{
     *     messageId?: string|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
