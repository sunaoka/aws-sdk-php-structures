<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForThirdPartyJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActionTypeId $actionTypeId
 * @property int $maxBatchSize
 */
class PollForThirdPartyJobsRequest extends Request
{
    /**
     * @param array{
     *     actionTypeId: Shapes\ActionTypeId,
     *     maxBatchSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
