<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListRetrainingSchedulers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ModelNameBeginsWith
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListRetrainingSchedulersRequest extends Request
{
    /**
     * @param array{
     *     ModelNameBeginsWith?: string|null,
     *     Status?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
