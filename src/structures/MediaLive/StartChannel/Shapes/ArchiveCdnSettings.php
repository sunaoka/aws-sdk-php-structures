<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveS3Settings $ArchiveS3Settings
 */
class ArchiveCdnSettings extends Shape
{
    /**
     * @param array{ArchiveS3Settings?: ArchiveS3Settings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
