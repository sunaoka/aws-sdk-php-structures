<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_SCALING'|'EVENT_BASED_AUTO_SCALING' $mode
 * @property CustomerManagedWorkerCapabilities $workerCapabilities
 * @property string|null $storageProfileId
 * @property 'NO_PROPAGATION'|'PROPAGATE_TAGS_TO_WORKERS_AT_LAUNCH'|null $tagPropagationMode
 */
class CustomerManagedFleetConfiguration extends Shape
{
    /**
     * @param array{
     *     mode: 'NO_SCALING'|'EVENT_BASED_AUTO_SCALING',
     *     workerCapabilities: CustomerManagedWorkerCapabilities,
     *     storageProfileId?: string|null,
     *     tagPropagationMode?: 'NO_PROPAGATION'|'PROPAGATE_TAGS_TO_WORKERS_AT_LAUNCH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
