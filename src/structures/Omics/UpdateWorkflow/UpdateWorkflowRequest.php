<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 */
class UpdateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
