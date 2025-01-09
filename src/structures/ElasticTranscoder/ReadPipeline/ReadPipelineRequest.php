<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class ReadPipelineRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
