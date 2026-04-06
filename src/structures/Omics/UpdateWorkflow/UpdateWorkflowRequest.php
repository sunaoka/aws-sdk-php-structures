<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property string|null $description
 */
class UpdateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
