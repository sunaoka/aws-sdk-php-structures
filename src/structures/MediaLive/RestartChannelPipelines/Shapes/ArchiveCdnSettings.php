<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveS3Settings|null $ArchiveS3Settings
 */
class ArchiveCdnSettings extends Shape
{
    /**
     * @param array{ArchiveS3Settings?: ArchiveS3Settings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
