<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property array<string, string> $DefaultRunProperties
 * @property int $MaxConcurrentRuns
 */
class UpdateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     DefaultRunProperties?: array<string, string>,
     *     MaxConcurrentRuns?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
