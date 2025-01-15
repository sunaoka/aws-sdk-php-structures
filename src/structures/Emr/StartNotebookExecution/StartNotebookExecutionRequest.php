<?php

namespace Sunaoka\Aws\Structures\Emr\StartNotebookExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EditorId
 * @property string|null $RelativePath
 * @property string|null $NotebookExecutionName
 * @property string|null $NotebookParams
 * @property Shapes\ExecutionEngineConfig $ExecutionEngine
 * @property string $ServiceRole
 * @property string|null $NotebookInstanceSecurityGroupId
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\NotebookS3LocationFromInput|null $NotebookS3Location
 * @property Shapes\OutputNotebookS3LocationFromInput|null $OutputNotebookS3Location
 * @property 'HTML'|null $OutputNotebookFormat
 * @property array<string, string>|null $EnvironmentVariables
 */
class StartNotebookExecutionRequest extends Request
{
    /**
     * @param array{
     *     EditorId?: string|null,
     *     RelativePath?: string|null,
     *     NotebookExecutionName?: string|null,
     *     NotebookParams?: string|null,
     *     ExecutionEngine: Shapes\ExecutionEngineConfig,
     *     ServiceRole: string,
     *     NotebookInstanceSecurityGroupId?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     NotebookS3Location?: Shapes\NotebookS3LocationFromInput|null,
     *     OutputNotebookS3Location?: Shapes\OutputNotebookS3LocationFromInput|null,
     *     OutputNotebookFormat?: 'HTML'|null,
     *     EnvironmentVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
