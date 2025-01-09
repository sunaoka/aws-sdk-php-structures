<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationId
 * @property list<string> $ContactIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $TimeZoneId
 * @property Shapes\RecurrenceSettings $Recurrence
 */
class UpdateRotationRequest extends Request
{
    /**
     * @param array{
     *     RotationId: string,
     *     ContactIds?: list<string>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     TimeZoneId?: string,
     *     Recurrence: Shapes\RecurrenceSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
