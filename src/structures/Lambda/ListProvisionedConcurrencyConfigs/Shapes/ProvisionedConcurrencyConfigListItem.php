<?php

namespace Sunaoka\Aws\Structures\Lambda\ListProvisionedConcurrencyConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionArn
 * @property int<1, max> $RequestedProvisionedConcurrentExecutions
 * @property int<0, max> $AvailableProvisionedConcurrentExecutions
 * @property int<0, max> $AllocatedProvisionedConcurrentExecutions
 * @property 'IN_PROGRESS'|'READY'|'FAILED' $Status
 * @property string $StatusReason
 * @property string $LastModified
 */
class ProvisionedConcurrencyConfigListItem extends Shape
{
    /**
     * @param array{
     *     FunctionArn?: string,
     *     RequestedProvisionedConcurrentExecutions?: int<1, max>,
     *     AvailableProvisionedConcurrentExecutions?: int<0, max>,
     *     AllocatedProvisionedConcurrentExecutions?: int<0, max>,
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
