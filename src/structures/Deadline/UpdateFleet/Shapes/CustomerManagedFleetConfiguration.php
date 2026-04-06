<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_SCALING'|'EVENT_BASED_AUTO_SCALING' $mode
 * @property CustomerManagedWorkerCapabilities $workerCapabilities
 * @property string|null $storageProfileId
 */
class CustomerManagedFleetConfiguration extends Shape
{
    /**
     * @param array{
     *     mode: 'NO_SCALING'|'EVENT_BASED_AUTO_SCALING',
     *     workerCapabilities: CustomerManagedWorkerCapabilities,
     *     storageProfileId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
