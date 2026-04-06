<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateStreamingImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string|null $name
 * @property string $streamingImageId
 * @property string $studioId
 */
class UpdateStreamingImageRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     name?: string|null,
     *     streamingImageId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
