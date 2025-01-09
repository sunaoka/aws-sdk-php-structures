<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipelineStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Status
 */
class UpdatePipelineStatusRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
