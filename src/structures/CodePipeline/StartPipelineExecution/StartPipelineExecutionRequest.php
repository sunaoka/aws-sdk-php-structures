<?php

namespace Sunaoka\Aws\Structures\CodePipeline\StartPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\PipelineVariable> $variables
 * @property string $clientRequestToken
 * @property list<Shapes\SourceRevisionOverride> $sourceRevisions
 */
class StartPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     variables?: list<Shapes\PipelineVariable>,
     *     clientRequestToken?: string,
     *     sourceRevisions?: list<Shapes\SourceRevisionOverride>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
