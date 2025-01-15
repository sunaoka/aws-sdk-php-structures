<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLocation|null $BlackoutSlateImage
 * @property 'DISABLED'|'ENABLED'|null $NetworkEndBlackout
 * @property InputLocation|null $NetworkEndBlackoutImage
 * @property string|null $NetworkId
 * @property 'DISABLED'|'ENABLED'|null $State
 */
class BlackoutSlate extends Shape
{
    /**
     * @param array{
     *     BlackoutSlateImage?: InputLocation|null,
     *     NetworkEndBlackout?: 'DISABLED'|'ENABLED'|null,
     *     NetworkEndBlackoutImage?: InputLocation|null,
     *     NetworkId?: string|null,
     *     State?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
