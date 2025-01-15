<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string> $ContactIds
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string $TimeZoneId
 * @property Shapes\RecurrenceSettings $Recurrence
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $IdempotencyToken
 */
class CreateRotationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ContactIds: list<string>,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     TimeZoneId: string,
     *     Recurrence: Shapes\RecurrenceSettings,
     *     Tags?: list<Shapes\Tag>|null,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
