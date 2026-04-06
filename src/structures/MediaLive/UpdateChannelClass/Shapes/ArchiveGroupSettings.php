<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveCdnSettings|null $ArchiveCdnSettings
 * @property OutputLocationRef $Destination
 * @property int<1, max>|null $RolloverInterval
 */
class ArchiveGroupSettings extends Shape
{
    /**
     * @param array{
     *     ArchiveCdnSettings?: ArchiveCdnSettings|null,
     *     Destination: OutputLocationRef,
     *     RolloverInterval?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
