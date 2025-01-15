<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListMetadataTransferJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATING'|'PENDING'|'RUNNING'|'CANCELLING'|'ERROR'|'COMPLETED'|'CANCELLED'|null $state
 * @property ErrorDetails|null $error
 * @property int|null $queuedPosition
 */
class MetadataTransferJobStatus extends Shape
{
    /**
     * @param array{
     *     state?: 'VALIDATING'|'PENDING'|'RUNNING'|'CANCELLING'|'ERROR'|'COMPLETED'|'CANCELLED'|null,
     *     error?: ErrorDetails|null,
     *     queuedPosition?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
