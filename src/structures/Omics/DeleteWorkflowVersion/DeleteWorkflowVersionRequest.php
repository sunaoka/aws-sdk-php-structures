<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteWorkflowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $versionName
 */
class DeleteWorkflowVersionRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     versionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
