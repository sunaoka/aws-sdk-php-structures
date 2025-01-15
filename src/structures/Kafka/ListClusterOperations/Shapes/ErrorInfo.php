<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property string|null $ErrorString
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     ErrorString?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
