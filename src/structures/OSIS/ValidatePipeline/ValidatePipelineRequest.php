<?php

namespace Sunaoka\Aws\Structures\OSIS\ValidatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineConfigurationBody
 */
class ValidatePipelineRequest extends Request
{
    /**
     * @param array{PipelineConfigurationBody: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
