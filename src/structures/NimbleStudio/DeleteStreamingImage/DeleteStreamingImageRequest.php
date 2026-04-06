<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStreamingImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $streamingImageId
 * @property string $studioId
 */
class DeleteStreamingImageRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     streamingImageId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
