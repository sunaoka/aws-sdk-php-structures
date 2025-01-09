<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateJobPriority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $JobId
 * @property int $Priority
 */
class UpdateJobPriorityRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     JobId: string,
     *     Priority: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
