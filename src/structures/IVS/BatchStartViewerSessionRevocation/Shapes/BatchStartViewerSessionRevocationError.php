<?php

namespace Sunaoka\Aws\Structures\IVS\BatchStartViewerSessionRevocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelArn
 * @property string $viewerId
 * @property string|null $code
 * @property string|null $message
 */
class BatchStartViewerSessionRevocationError extends Shape
{
    /**
     * @param array{
     *     channelArn: string,
     *     viewerId: string,
     *     code?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
