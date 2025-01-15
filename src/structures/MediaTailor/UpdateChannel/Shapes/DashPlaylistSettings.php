<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ManifestWindowSeconds
 * @property int|null $MinBufferTimeSeconds
 * @property int|null $MinUpdatePeriodSeconds
 * @property int|null $SuggestedPresentationDelaySeconds
 */
class DashPlaylistSettings extends Shape
{
    /**
     * @param array{
     *     ManifestWindowSeconds?: int|null,
     *     MinBufferTimeSeconds?: int|null,
     *     MinUpdatePeriodSeconds?: int|null,
     *     SuggestedPresentationDelaySeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
