<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DeleteSignalingChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 * @property string|null $CurrentVersion
 */
class DeleteSignalingChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelARN: string,
     *     CurrentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
