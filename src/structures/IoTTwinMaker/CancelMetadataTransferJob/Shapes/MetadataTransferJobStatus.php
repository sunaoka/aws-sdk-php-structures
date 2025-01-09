<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CancelMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATING'|'PENDING'|'RUNNING'|'CANCELLING'|'ERROR'|'COMPLETED'|'CANCELLED' $state
 * @property ErrorDetails $error
 * @property int $queuedPosition
 */
class MetadataTransferJobStatus extends Shape
{
    /**
     * @param array{
     *     state?: 'VALIDATING'|'PENDING'|'RUNNING'|'CANCELLING'|'ERROR'|'COMPLETED'|'CANCELLED',
     *     error?: ErrorDetails,
     *     queuedPosition?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
