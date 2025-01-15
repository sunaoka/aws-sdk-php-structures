<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByVPC\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwningAccount
 * @property string|null $OwningService
 */
class HostedZoneOwner extends Shape
{
    /**
     * @param array{
     *     OwningAccount?: string|null,
     *     OwningService?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
