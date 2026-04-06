<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStreamingImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property string|null $owner
 * @property string $studioId
 */
class ListStreamingImagesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     owner?: string|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
