<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED' $ExecutionStatus
 * @property string $StatusMessage
 */
class LastExecutionStatus extends Shape
{
    /**
     * @param array{
     *     ExecutionStatus?: 'COMPLETED'|'IN_PROGRESS'|'FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
