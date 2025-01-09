<?php

namespace Sunaoka\Aws\Structures\IVS\BatchStartViewerSessionRevocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelArn
 * @property string $code
 * @property string $message
 * @property string $viewerId
 */
class BatchStartViewerSessionRevocationError extends Shape
{
    /**
     * @param array{
     *     channelArn: string,
     *     code?: string,
     *     message?: string,
     *     viewerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
