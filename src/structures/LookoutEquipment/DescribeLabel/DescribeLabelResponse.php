<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeLabel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LabelGroupName
 * @property string $LabelGroupArn
 * @property string $LabelId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'ANOMALY'|'NO_ANOMALY'|'NEUTRAL' $Rating
 * @property string $FaultCode
 * @property string $Notes
 * @property string $Equipment
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class DescribeLabelResponse extends Response
{
}
