<?php

namespace Sunaoka\Aws\Structures\Glue\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property array<string, string> $DefaultRunProperties
 * @property array<string, string> $Tags
 * @property int $MaxConcurrentRuns
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     DefaultRunProperties?: array<string, string>,
     *     Tags?: array<string, string>,
     *     MaxConcurrentRuns?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
