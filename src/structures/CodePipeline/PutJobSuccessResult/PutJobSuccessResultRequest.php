<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutJobSuccessResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property Shapes\CurrentRevision $currentRevision
 * @property string $continuationToken
 * @property Shapes\ExecutionDetails $executionDetails
 * @property array<string, string> $outputVariables
 */
class PutJobSuccessResultRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     currentRevision?: Shapes\CurrentRevision,
     *     continuationToken?: string,
     *     executionDetails?: Shapes\ExecutionDetails,
     *     outputVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
