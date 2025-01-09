<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetPipelineStateRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
