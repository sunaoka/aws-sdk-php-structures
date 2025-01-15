<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $RotationStartTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<string> $Members
 * @property string $TimeZoneId
 * @property Shapes\RecurrenceSettings $Recurrence
 * @property list<Shapes\PreviewOverride>|null $Overrides
 * @property string|null $NextToken
 * @property int<0, 1024>|null $MaxResults
 */
class ListPreviewRotationShiftsRequest extends Request
{
    /**
     * @param array{
     *     RotationStartTime?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Members: list<string>,
     *     TimeZoneId: string,
     *     Recurrence: Shapes\RecurrenceSettings,
     *     Overrides?: list<Shapes\PreviewOverride>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1024>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
