<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveCdnSettings $ArchiveCdnSettings
 * @property OutputLocationRef $Destination
 * @property int $RolloverInterval
 */
class ArchiveGroupSettings extends Shape
{
    /**
     * @param array{
     *     ArchiveCdnSettings?: ArchiveCdnSettings,
     *     Destination: OutputLocationRef,
     *     RolloverInterval?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
