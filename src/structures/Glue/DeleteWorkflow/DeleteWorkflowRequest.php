<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteWorkflowRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
