<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutJobSuccessResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property Shapes\CurrentRevision|null $currentRevision
 * @property string|null $continuationToken
 * @property Shapes\ExecutionDetails|null $executionDetails
 * @property array<string, string>|null $outputVariables
 */
class PutJobSuccessResultRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     currentRevision?: Shapes\CurrentRevision|null,
     *     continuationToken?: string|null,
     *     executionDetails?: Shapes\ExecutionDetails|null,
     *     outputVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
