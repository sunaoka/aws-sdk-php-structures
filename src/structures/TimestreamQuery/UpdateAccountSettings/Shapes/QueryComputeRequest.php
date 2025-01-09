<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON_DEMAND'|'PROVISIONED' $ComputeMode
 * @property ProvisionedCapacityRequest $ProvisionedCapacity
 */
class QueryComputeRequest extends Shape
{
    /**
     * @param array{
     *     ComputeMode?: 'ON_DEMAND'|'PROVISIONED',
     *     ProvisionedCapacity?: ProvisionedCapacityRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
