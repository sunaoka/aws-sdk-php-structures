<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DeletePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeletePipelineRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
