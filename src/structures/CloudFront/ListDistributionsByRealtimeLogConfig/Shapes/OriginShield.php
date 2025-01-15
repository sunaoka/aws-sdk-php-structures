<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByRealtimeLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $OriginShieldRegion
 */
class OriginShield extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     OriginShieldRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
