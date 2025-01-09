<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $RotationStartTime
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<string> $Members
 * @property string $TimeZoneId
 * @property Shapes\RecurrenceSettings $Recurrence
 * @property list<Shapes\PreviewOverride> $Overrides
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListPreviewRotationShiftsRequest extends Request
{
    /**
     * @param array{
     *     RotationStartTime?: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Members: list<string>,
     *     TimeZoneId: string,
     *     Recurrence: Shapes\RecurrenceSettings,
     *     Overrides?: list<Shapes\PreviewOverride>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
