<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_SCALING'|'EVENT_BASED_AUTO_SCALING' $mode
 * @property CustomerManagedWorkerCapabilities $workerCapabilities
 * @property string $storageProfileId
 */
class CustomerManagedFleetConfiguration extends Shape
{
    /**
     * @param array{
     *     mode: 'NO_SCALING'|'EVENT_BASED_AUTO_SCALING',
     *     workerCapabilities: CustomerManagedWorkerCapabilities,
     *     storageProfileId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
