<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PipelineDeclaration $pipeline
 * @property list<Shapes\Tag>|null $tags
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     pipeline: Shapes\PipelineDeclaration,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
