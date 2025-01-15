<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutThirdPartyJobSuccessResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $clientToken
 * @property Shapes\CurrentRevision|null $currentRevision
 * @property string|null $continuationToken
 * @property Shapes\ExecutionDetails|null $executionDetails
 */
class PutThirdPartyJobSuccessResultRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     clientToken: string,
     *     currentRevision?: Shapes\CurrentRevision|null,
     *     continuationToken?: string|null,
     *     executionDetails?: Shapes\ExecutionDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
