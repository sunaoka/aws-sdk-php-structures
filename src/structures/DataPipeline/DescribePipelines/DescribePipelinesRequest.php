<?php

namespace Sunaoka\Aws\Structures\DataPipeline\DescribePipelines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $pipelineIds
 */
class DescribePipelinesRequest extends Request
{
    /**
     * @param array{pipelineIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
