<?php

namespace Sunaoka\Aws\Structures\Emr\StartNotebookExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EditorId
 * @property string $RelativePath
 * @property string $NotebookExecutionName
 * @property string $NotebookParams
 * @property Shapes\ExecutionEngineConfig $ExecutionEngine
 * @property string $ServiceRole
 * @property string $NotebookInstanceSecurityGroupId
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\NotebookS3LocationFromInput $NotebookS3Location
 * @property Shapes\OutputNotebookS3LocationFromInput $OutputNotebookS3Location
 * @property 'HTML' $OutputNotebookFormat
 * @property array<string, string> $EnvironmentVariables
 */
class StartNotebookExecutionRequest extends Request
{
    /**
     * @param array{
     *     EditorId?: string,
     *     RelativePath?: string,
     *     NotebookExecutionName?: string,
     *     NotebookParams?: string,
     *     ExecutionEngine: Shapes\ExecutionEngineConfig,
     *     ServiceRole: string,
     *     NotebookInstanceSecurityGroupId?: string,
     *     Tags?: list<Shapes\Tag>,
     *     NotebookS3Location?: Shapes\NotebookS3LocationFromInput,
     *     OutputNotebookS3Location?: Shapes\OutputNotebookS3LocationFromInput,
     *     OutputNotebookFormat?: 'HTML',
     *     EnvironmentVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
