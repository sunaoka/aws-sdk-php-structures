<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveCdnSettings|null $ArchiveCdnSettings
 * @property OutputLocationRef $Destination
 * @property int|null $RolloverInterval
 */
class ArchiveGroupSettings extends Shape
{
    /**
     * @param array{
     *     ArchiveCdnSettings?: ArchiveCdnSettings|null,
     *     Destination: OutputLocationRef,
     *     RolloverInterval?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
