<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListMetadataTransferJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $workspaceId
 * @property 'VALIDATING'|'PENDING'|'RUNNING'|'CANCELLING'|'ERROR'|'COMPLETED'|'CANCELLED'|null $state
 */
class ListMetadataTransferJobsFilter extends Shape
{
    /**
     * @param array{
     *     workspaceId?: string|null,
     *     state?: 'VALIDATING'|'PENDING'|'RUNNING'|'CANCELLING'|'ERROR'|'COMPLETED'|'CANCELLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
