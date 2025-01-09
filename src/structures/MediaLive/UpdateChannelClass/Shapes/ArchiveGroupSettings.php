<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveCdnSettings $ArchiveCdnSettings
 * @property OutputLocationRef $Destination
 * @property int<1, max> $RolloverInterval
 */
class ArchiveGroupSettings extends Shape
{
    /**
     * @param array{
     *     ArchiveCdnSettings?: ArchiveCdnSettings,
     *     Destination: OutputLocationRef,
     *     RolloverInterval?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
