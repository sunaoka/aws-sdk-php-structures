<?php

namespace Sunaoka\Aws\Structures\CodePipeline\StartPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\PipelineVariable>|null $variables
 * @property string|null $clientRequestToken
 * @property list<Shapes\SourceRevisionOverride>|null $sourceRevisions
 */
class StartPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     variables?: list<Shapes\PipelineVariable>|null,
     *     clientRequestToken?: string|null,
     *     sourceRevisions?: list<Shapes\SourceRevisionOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
