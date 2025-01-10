<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property 'WDL'|'NEXTFLOW'|'CWL' $engine
 * @property string|resource|\Psr\Http\Message\StreamInterface $definitionZip
 * @property string $definitionUri
 * @property string $main
 * @property array<string, Shapes\WorkflowParameter> $parameterTemplate
 * @property int<0, 100000> $storageCapacity
 * @property array<string, string> $tags
 * @property string $requestId
 * @property 'GPU' $accelerators
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     engine?: 'WDL'|'NEXTFLOW'|'CWL',
     *     definitionZip?: string|resource|\Psr\Http\Message\StreamInterface,
     *     definitionUri?: string,
     *     main?: string,
     *     parameterTemplate?: array<string, Shapes\WorkflowParameter>,
     *     storageCapacity?: int<0, 100000>,
     *     tags?: array<string, string>,
     *     requestId: string,
     *     accelerators?: 'GPU'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
