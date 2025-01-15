<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string|null $streamId
 */
class GetStreamSessionRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     streamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
