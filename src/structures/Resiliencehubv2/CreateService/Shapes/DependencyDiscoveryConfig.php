<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'INITIALIZING'|'DISABLED' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DependencyDiscoveryConfig extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'INITIALIZING'|'DISABLED',
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
