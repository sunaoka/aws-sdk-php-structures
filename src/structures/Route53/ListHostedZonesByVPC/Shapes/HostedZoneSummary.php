<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByVPC\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostedZoneId
 * @property string $Name
 * @property HostedZoneOwner $Owner
 */
class HostedZoneSummary extends Shape
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     Name: string,
     *     Owner: HostedZoneOwner
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
