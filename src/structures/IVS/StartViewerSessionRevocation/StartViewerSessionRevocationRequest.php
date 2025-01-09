<?php

namespace Sunaoka\Aws\Structures\IVS\StartViewerSessionRevocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string $viewerId
 * @property int<0, max> $viewerSessionVersionsLessThanOrEqualTo
 */
class StartViewerSessionRevocationRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     viewerId: string,
     *     viewerSessionVersionsLessThanOrEqualTo?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
