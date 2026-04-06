<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStreamingImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $streamingImageId
 * @property string $studioId
 */
class GetStreamingImageRequest extends Request
{
    /**
     * @param array{
     *     streamingImageId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
