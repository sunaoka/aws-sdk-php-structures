<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceSchedulers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $InferenceSchedulerNameBeginsWith
 * @property string $ModelName
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 */
class ListInferenceSchedulersRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     InferenceSchedulerNameBeginsWith?: string,
     *     ModelName?: string,
     *     Status?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
