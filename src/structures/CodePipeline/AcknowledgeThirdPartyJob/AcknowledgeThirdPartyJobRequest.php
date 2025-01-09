<?php

namespace Sunaoka\Aws\Structures\CodePipeline\AcknowledgeThirdPartyJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $nonce
 * @property string $clientToken
 */
class AcknowledgeThirdPartyJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     nonce: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
