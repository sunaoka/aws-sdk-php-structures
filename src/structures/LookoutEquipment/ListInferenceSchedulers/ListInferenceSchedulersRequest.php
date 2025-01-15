<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceSchedulers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property string|null $InferenceSchedulerNameBeginsWith
 * @property string|null $ModelName
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 */
class ListInferenceSchedulersRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     InferenceSchedulerNameBeginsWith?: string|null,
     *     ModelName?: string|null,
     *     Status?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
