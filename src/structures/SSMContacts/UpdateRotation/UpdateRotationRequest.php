<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationId
 * @property list<string>|null $ContactIds
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $TimeZoneId
 * @property Shapes\RecurrenceSettings $Recurrence
 */
class UpdateRotationRequest extends Request
{
    /**
     * @param array{
     *     RotationId: string,
     *     ContactIds?: list<string>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     TimeZoneId?: string|null,
     *     Recurrence: Shapes\RecurrenceSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
