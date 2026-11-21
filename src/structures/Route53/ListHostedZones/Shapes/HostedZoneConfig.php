<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property bool|null $PrivateZone
 * @property 'STANDARD'|'ADVANCED'|null $HostedZoneTier
 */
class HostedZoneConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     PrivateZone?: bool|null,
     *     HostedZoneTier?: 'STANDARD'|'ADVANCED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
