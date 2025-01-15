<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeLabel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LabelGroupName
 * @property string|null $LabelGroupArn
 * @property string|null $LabelId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'ANOMALY'|'NO_ANOMALY'|'NEUTRAL'|null $Rating
 * @property string|null $FaultCode
 * @property string|null $Notes
 * @property string|null $Equipment
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class DescribeLabelResponse extends Response
{
}
