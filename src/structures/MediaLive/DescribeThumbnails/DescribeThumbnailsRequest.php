<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeThumbnails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property string $PipelineId
 * @property string $ThumbnailType
 */
class DescribeThumbnailsRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     PipelineId: string,
     *     ThumbnailType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
