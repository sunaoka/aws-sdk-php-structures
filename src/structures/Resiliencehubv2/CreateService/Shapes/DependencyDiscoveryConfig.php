<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'INITIALIZING'|'DISABLED' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property int<0, max>|null $eligibleResourceCount
 * @property string|null $message
 */
class DependencyDiscoveryConfig extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'INITIALIZING'|'DISABLED',
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     eligibleResourceCount?: int<0, max>|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
