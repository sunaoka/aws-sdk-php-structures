<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PipelineDeclaration $pipeline
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{pipeline: Shapes\PipelineDeclaration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
