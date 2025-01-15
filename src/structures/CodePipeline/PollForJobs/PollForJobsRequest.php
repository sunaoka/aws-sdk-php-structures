<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActionTypeId $actionTypeId
 * @property int<1, max>|null $maxBatchSize
 * @property array<string, string>|null $queryParam
 */
class PollForJobsRequest extends Request
{
    /**
     * @param array{
     *     actionTypeId: Shapes\ActionTypeId,
     *     maxBatchSize?: int<1, max>|null,
     *     queryParam?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
