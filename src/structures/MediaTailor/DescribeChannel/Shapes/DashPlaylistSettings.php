<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ManifestWindowSeconds
 * @property int $MinBufferTimeSeconds
 * @property int $MinUpdatePeriodSeconds
 * @property int $SuggestedPresentationDelaySeconds
 */
class DashPlaylistSettings extends Shape
{
    /**
     * @param array{
     *     ManifestWindowSeconds?: int,
     *     MinBufferTimeSeconds?: int,
     *     MinUpdatePeriodSeconds?: int,
     *     SuggestedPresentationDelaySeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
