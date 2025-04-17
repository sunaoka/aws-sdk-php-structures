<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $description
 * @property 'WDL'|'NEXTFLOW'|'CWL'|null $engine
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $definitionZip
 * @property string|null $definitionUri
 * @property string|null $main
 * @property array<string, Shapes\WorkflowParameter>|null $parameterTemplate
 * @property int<0, 100000>|null $storageCapacity
 * @property array<string, string>|null $tags
 * @property string $requestId
 * @property 'GPU'|null $accelerators
 * @property 'STATIC'|'DYNAMIC'|null $storageType
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     engine?: 'WDL'|'NEXTFLOW'|'CWL'|null,
     *     definitionZip?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     definitionUri?: string|null,
     *     main?: string|null,
     *     parameterTemplate?: array<string, Shapes\WorkflowParameter>|null,
     *     storageCapacity?: int<0, 100000>|null,
     *     tags?: array<string, string>|null,
     *     requestId: string,
     *     accelerators?: 'GPU'|null,
     *     storageType?: 'STATIC'|'DYNAMIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
