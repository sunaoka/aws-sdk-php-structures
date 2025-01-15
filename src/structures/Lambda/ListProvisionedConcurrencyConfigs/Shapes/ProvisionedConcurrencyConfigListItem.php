<?php

namespace Sunaoka\Aws\Structures\Lambda\ListProvisionedConcurrencyConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionArn
 * @property int<1, max>|null $RequestedProvisionedConcurrentExecutions
 * @property int<0, max>|null $AvailableProvisionedConcurrentExecutions
 * @property int<0, max>|null $AllocatedProvisionedConcurrentExecutions
 * @property 'IN_PROGRESS'|'READY'|'FAILED'|null $Status
 * @property string|null $StatusReason
 * @property string|null $LastModified
 */
class ProvisionedConcurrencyConfigListItem extends Shape
{
    /**
     * @param array{
     *     FunctionArn?: string|null,
     *     RequestedProvisionedConcurrentExecutions?: int<1, max>|null,
     *     AvailableProvisionedConcurrentExecutions?: int<0, max>|null,
     *     AllocatedProvisionedConcurrentExecutions?: int<0, max>|null,
     *     Status?: 'IN_PROGRESS'|'READY'|'FAILED'|null,
     *     StatusReason?: string|null,
     *     LastModified?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
