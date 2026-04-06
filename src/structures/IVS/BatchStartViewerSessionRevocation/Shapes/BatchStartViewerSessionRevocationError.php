<?php

namespace Sunaoka\Aws\Structures\IVS\BatchStartViewerSessionRevocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelArn
 * @property string|null $code
 * @property string|null $message
 * @property string $viewerId
 */
class BatchStartViewerSessionRevocationError extends Shape
{
    /**
     * @param array{
     *     channelArn: string,
     *     code?: string|null,
     *     message?: string|null,
     *     viewerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
