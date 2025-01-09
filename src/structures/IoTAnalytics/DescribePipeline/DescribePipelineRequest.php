<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 */
class DescribePipelineRequest extends Request
{
    /**
     * @param array{pipelineName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
