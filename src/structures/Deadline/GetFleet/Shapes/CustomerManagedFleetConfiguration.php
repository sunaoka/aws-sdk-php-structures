<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_SCALING'|'EVENT_BASED_AUTO_SCALING' $mode
 * @property string|null $storageProfileId
 * @property CustomerManagedWorkerCapabilities $workerCapabilities
 */
class CustomerManagedFleetConfiguration extends Shape
{
    /**
     * @param array{
     *     mode: 'NO_SCALING'|'EVENT_BASED_AUTO_SCALING',
     *     storageProfileId?: string|null,
     *     workerCapabilities: CustomerManagedWorkerCapabilities
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
