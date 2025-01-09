<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 * @property \Aws\Api\DateTimeResult $IntervalStartTime
 * @property \Aws\Api\DateTimeResult $IntervalEndTime
 * @property string $FaultCode
 * @property string $Equipment
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListLabelsRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupName: string,
     *     IntervalStartTime?: \Aws\Api\DateTimeResult,
     *     IntervalEndTime?: \Aws\Api\DateTimeResult,
     *     FaultCode?: string,
     *     Equipment?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
