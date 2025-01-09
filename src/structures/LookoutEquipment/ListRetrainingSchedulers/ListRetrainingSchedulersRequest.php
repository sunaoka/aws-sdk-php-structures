<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListRetrainingSchedulers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelNameBeginsWith
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListRetrainingSchedulersRequest extends Request
{
    /**
     * @param array{
     *     ModelNameBeginsWith?: string,
     *     Status?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED',
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
