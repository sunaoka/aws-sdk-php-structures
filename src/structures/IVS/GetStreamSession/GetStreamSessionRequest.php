<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string $streamId
 */
class GetStreamSessionRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     streamId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
