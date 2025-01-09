<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutThirdPartyJobSuccessResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $clientToken
 * @property Shapes\CurrentRevision $currentRevision
 * @property string $continuationToken
 * @property Shapes\ExecutionDetails $executionDetails
 */
class PutThirdPartyJobSuccessResultRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     clientToken: string,
     *     currentRevision?: Shapes\CurrentRevision,
     *     continuationToken?: string,
     *     executionDetails?: Shapes\ExecutionDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
