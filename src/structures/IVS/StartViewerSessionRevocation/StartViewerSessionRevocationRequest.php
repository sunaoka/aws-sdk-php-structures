<?php

namespace Sunaoka\Aws\Structures\IVS\StartViewerSessionRevocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string $viewerId
 * @property int $viewerSessionVersionsLessThanOrEqualTo
 */
class StartViewerSessionRevocationRequest extends Request
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
