<?php

namespace Sunaoka\Aws\Structures\Glue\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property array<string, string>|null $DefaultRunProperties
 * @property array<string, string>|null $Tags
 * @property int|null $MaxConcurrentRuns
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DefaultRunProperties?: array<string, string>|null,
     *     Tags?: array<string, string>|null,
     *     MaxConcurrentRuns?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
