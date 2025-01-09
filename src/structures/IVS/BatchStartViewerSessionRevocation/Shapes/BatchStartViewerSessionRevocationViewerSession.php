<?php

namespace Sunaoka\Aws\Structures\IVS\BatchStartViewerSessionRevocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelArn
 * @property string $viewerId
 * @property int $viewerSessionVersionsLessThanOrEqualTo
 */
class BatchStartViewerSessionRevocationViewerSession extends Shape
{
    /**
     * @param array{
     *     channelArn: string,
     *     viewerId: string,
     *     viewerSessionVersionsLessThanOrEqualTo?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
