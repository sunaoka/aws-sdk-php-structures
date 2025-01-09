<?php

namespace Sunaoka\Aws\Structures\Lambda\ListProvisionedConcurrencyConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionArn
 * @property int $RequestedProvisionedConcurrentExecutions
 * @property int $AvailableProvisionedConcurrentExecutions
 * @property int $AllocatedProvisionedConcurrentExecutions
 * @property 'IN_PROGRESS'|'READY'|'FAILED' $Status
 * @property string $StatusReason
 * @property string $LastModified
 */
class ProvisionedConcurrencyConfigListItem extends Shape
{
    /**
     * @param array{
     *     FunctionArn?: string,
     *     RequestedProvisionedConcurrentExecutions?: int,
     *     AvailableProvisionedConcurrentExecutions?: int,
     *     AllocatedProvisionedConcurrentExecutions?: int,
     *     Status?: 'IN_PROGRESS'|'READY'|'FAILED',
     *     StatusReason?: string,
     *     LastModified?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
