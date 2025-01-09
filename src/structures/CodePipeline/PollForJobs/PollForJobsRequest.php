<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActionTypeId $actionTypeId
 * @property int<1, max> $maxBatchSize
 * @property array<string, string> $queryParam
 */
class PollForJobsRequest extends Request
{
    /**
     * @param array{
     *     actionTypeId: Shapes\ActionTypeId,
     *     maxBatchSize?: int<1, max>,
     *     queryParam?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
