<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateJobPriority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $JobId
 * @property int<0, 2147483647> $Priority
 */
class UpdateJobPriorityRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     JobId: string,
     *     Priority: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
