<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string> $ContactIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $TimeZoneId
 * @property Shapes\RecurrenceSettings $Recurrence
 * @property list<Shapes\Tag> $Tags
 * @property string $IdempotencyToken
 */
class CreateRotationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ContactIds: list<string>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     TimeZoneId: string,
     *     Recurrence: Shapes\RecurrenceSettings,
     *     Tags?: list<Shapes\Tag>,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
