<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateUpdatedImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $existingImageName
 * @property string $newImageName
 * @property string $newImageDescription
 * @property string $newImageDisplayName
 * @property array<string, string> $newImageTags
 * @property bool $dryRun
 */
class CreateUpdatedImageRequest extends Request
{
    /**
     * @param array{
     *     existingImageName: string,
     *     newImageName: string,
     *     newImageDescription?: string,
     *     newImageDisplayName?: string,
     *     newImageTags?: array<string, string>,
     *     dryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
