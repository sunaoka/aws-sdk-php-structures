<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 * @property \Aws\Api\DateTimeResult|null $IntervalStartTime
 * @property \Aws\Api\DateTimeResult|null $IntervalEndTime
 * @property string|null $FaultCode
 * @property string|null $Equipment
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListLabelsRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupName: string,
     *     IntervalStartTime?: \Aws\Api\DateTimeResult|null,
     *     IntervalEndTime?: \Aws\Api\DateTimeResult|null,
     *     FaultCode?: string|null,
     *     Equipment?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
