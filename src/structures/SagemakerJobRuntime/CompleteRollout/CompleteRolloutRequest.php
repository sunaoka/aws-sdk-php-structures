<?php

namespace Sunaoka\Aws\Structures\SagemakerJobRuntime\CompleteRollout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobArn
 * @property string $TrajectoryId
 * @property 'ready'|'failed'|null $Status
 * @property string|null $ClientToken
 */
class CompleteRolloutRequest extends Request
{
    /**
     * @param array{
     *     JobArn: string,
     *     TrajectoryId: string,
     *     Status?: 'ready'|'failed'|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
