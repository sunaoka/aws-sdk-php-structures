<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'PRIVATE'|'READY2RUN' $type
 * @property list<'DEFINITION'> $export
 * @property string $workflowOwnerId
 */
class GetWorkflowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     type?: 'PRIVATE'|'READY2RUN',
     *     export?: list<'DEFINITION'>,
     *     workflowOwnerId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
