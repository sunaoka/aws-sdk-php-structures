<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStreamingImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $ec2ImageId
 * @property string $name
 * @property string $studioId
 * @property array<string, string>|null $tags
 */
class CreateStreamingImageRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     ec2ImageId: string,
     *     name: string,
     *     studioId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
