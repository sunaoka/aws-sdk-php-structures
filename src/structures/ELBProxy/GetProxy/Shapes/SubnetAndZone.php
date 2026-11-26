<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $subnetId
 * @property string $zoneId
 * @property string|null $zoneName
 */
class SubnetAndZone extends Shape
{
    /**
     * @param array{
     *     subnetId: string,
     *     zoneId: string,
     *     zoneName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
