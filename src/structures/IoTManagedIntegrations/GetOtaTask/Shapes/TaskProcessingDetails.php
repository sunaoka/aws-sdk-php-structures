<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfCanceledThings
 * @property int|null $NumberOfFailedThings
 * @property int|null $NumberOfInProgressThings
 * @property int|null $numberOfQueuedThings
 * @property int|null $numberOfRejectedThings
 * @property int|null $numberOfRemovedThings
 * @property int|null $numberOfSucceededThings
 * @property int|null $numberOfTimedOutThings
 * @property list<string>|null $processingTargets
 */
class TaskProcessingDetails extends Shape
{
    /**
     * @param array{
     *     NumberOfCanceledThings?: int|null,
     *     NumberOfFailedThings?: int|null,
     *     NumberOfInProgressThings?: int|null,
     *     numberOfQueuedThings?: int|null,
     *     numberOfRejectedThings?: int|null,
     *     numberOfRemovedThings?: int|null,
     *     numberOfSucceededThings?: int|null,
     *     numberOfTimedOutThings?: int|null,
     *     processingTargets?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
