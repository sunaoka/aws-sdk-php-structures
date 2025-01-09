<?php

namespace Sunaoka\Aws\Structures\Appstream\CopyImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceImageName
 * @property string $DestinationImageName
 * @property string $DestinationRegion
 * @property string $DestinationImageDescription
 */
class CopyImageRequest extends Request
{
    /**
     * @param array{
     *     SourceImageName: string,
     *     DestinationImageName: string,
     *     DestinationRegion: string,
     *     DestinationImageDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
