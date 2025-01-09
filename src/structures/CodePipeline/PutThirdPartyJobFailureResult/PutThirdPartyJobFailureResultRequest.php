<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutThirdPartyJobFailureResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $clientToken
 * @property Shapes\FailureDetails $failureDetails
 */
class PutThirdPartyJobFailureResultRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     clientToken: string,
     *     failureDetails: Shapes\FailureDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
