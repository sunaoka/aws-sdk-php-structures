<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListMetadataTransferJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workspaceId
 * @property 'VALIDATING'|'PENDING'|'RUNNING'|'CANCELLING'|'ERROR'|'COMPLETED'|'CANCELLED' $state
 */
class ListMetadataTransferJobsFilter extends Shape
{
    /**
     * @param array{
     *     workspaceId?: string,
     *     state?: 'VALIDATING'|'PENDING'|'RUNNING'|'CANCELLING'|'ERROR'|'COMPLETED'|'CANCELLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
