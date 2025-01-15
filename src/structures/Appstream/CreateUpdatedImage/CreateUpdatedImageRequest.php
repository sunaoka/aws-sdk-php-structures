<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateUpdatedImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $existingImageName
 * @property string $newImageName
 * @property string|null $newImageDescription
 * @property string|null $newImageDisplayName
 * @property array<string, string>|null $newImageTags
 * @property bool|null $dryRun
 */
class CreateUpdatedImageRequest extends Request
{
    /**
     * @param array{
     *     existingImageName: string,
     *     newImageName: string,
     *     newImageDescription?: string|null,
     *     newImageDisplayName?: string|null,
     *     newImageTags?: array<string, string>|null,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
