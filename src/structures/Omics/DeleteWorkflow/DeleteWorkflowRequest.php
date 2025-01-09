<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteWorkflowRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
