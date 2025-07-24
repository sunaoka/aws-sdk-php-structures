<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $versionName
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $definitionZip
 * @property string|null $definitionUri
 * @property 'GPU'|null $accelerators
 * @property string|null $description
 * @property 'WDL'|'NEXTFLOW'|'CWL'|null $engine
 * @property string|null $main
 * @property array<string, Shapes\WorkflowParameter>|null $parameterTemplate
 * @property string $requestId
 * @property 'STATIC'|'DYNAMIC'|null $storageType
 * @property int<0, 100000>|null $storageCapacity
 * @property array<string, string>|null $tags
 * @property string|null $workflowBucketOwnerId
 * @property string|null $readmeMarkdown
 * @property string|null $parameterTemplatePath
 * @property string|null $readmePath
 * @property Shapes\DefinitionRepository|null $definitionRepository
 * @property string|null $readmeUri
 */
class CreateWorkflowVersionRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     versionName: string,
     *     definitionZip?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     definitionUri?: string|null,
     *     accelerators?: 'GPU'|null,
     *     description?: string|null,
     *     engine?: 'WDL'|'NEXTFLOW'|'CWL'|null,
     *     main?: string|null,
     *     parameterTemplate?: array<string, Shapes\WorkflowParameter>|null,
     *     requestId: string,
     *     storageType?: 'STATIC'|'DYNAMIC'|null,
     *     storageCapacity?: int<0, 100000>|null,
     *     tags?: array<string, string>|null,
     *     workflowBucketOwnerId?: string|null,
     *     readmeMarkdown?: string|null,
     *     parameterTemplatePath?: string|null,
     *     readmePath?: string|null,
     *     definitionRepository?: Shapes\DefinitionRepository|null,
     *     readmeUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
