<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'PRIVATE'|'READY2RUN'|null $type
 * @property list<'DEFINITION'>|null $export
 * @property string|null $workflowOwnerId
 */
class GetWorkflowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     type?: 'PRIVATE'|'READY2RUN'|null,
     *     export?: list<'DEFINITION'>|null,
     *     workflowOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
