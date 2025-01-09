<?php

namespace Sunaoka\Aws\Structures\CodePipeline\AcknowledgeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $nonce
 */
class AcknowledgeJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     nonce: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
