<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'ANOMALY'|'NO_ANOMALY'|'NEUTRAL' $Rating
 * @property string|null $FaultCode
 * @property string|null $Notes
 * @property string|null $Equipment
 * @property string $ClientToken
 */
class CreateLabelRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupName: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Rating: 'ANOMALY'|'NO_ANOMALY'|'NEUTRAL',
     *     FaultCode?: string|null,
     *     Notes?: string|null,
     *     Equipment?: string|null,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
