<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutJobFailureResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property Shapes\FailureDetails $failureDetails
 */
class PutJobFailureResultRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     failureDetails: Shapes\FailureDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
