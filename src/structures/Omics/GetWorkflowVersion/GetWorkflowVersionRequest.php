<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $versionName
 * @property 'PRIVATE'|'READY2RUN'|null $type
 * @property list<'DEFINITION'|'README'>|null $export
 * @property string|null $workflowOwnerId
 */
class GetWorkflowVersionRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     versionName: string,
     *     type?: 'PRIVATE'|'READY2RUN'|null,
     *     export?: list<'DEFINITION'|'README'>|null,
     *     workflowOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
