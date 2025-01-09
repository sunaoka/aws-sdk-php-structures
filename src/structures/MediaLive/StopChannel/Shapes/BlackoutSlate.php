<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLocation $BlackoutSlateImage
 * @property 'DISABLED'|'ENABLED' $NetworkEndBlackout
 * @property InputLocation $NetworkEndBlackoutImage
 * @property string $NetworkId
 * @property 'DISABLED'|'ENABLED' $State
 */
class BlackoutSlate extends Shape
{
    /**
     * @param array{
     *     BlackoutSlateImage?: InputLocation,
     *     NetworkEndBlackout?: 'DISABLED'|'ENABLED',
     *     NetworkEndBlackoutImage?: InputLocation,
     *     NetworkId?: string,
     *     State?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
