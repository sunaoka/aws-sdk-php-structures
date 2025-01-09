<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByVPC\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwningAccount
 * @property string $OwningService
 */
class HostedZoneOwner extends Shape
{
    /**
     * @param array{
     *     OwningAccount?: string,
     *     OwningService?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
