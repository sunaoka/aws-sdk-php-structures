<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RotationArn
 * @property string $Name
 * @property list<string>|null $ContactIds
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $TimeZoneId
 * @property RecurrenceSettings|null $Recurrence
 */
class Rotation extends Shape
{
    /**
     * @param array{
     *     RotationArn: string,
     *     Name: string,
     *     ContactIds?: list<string>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     TimeZoneId?: string|null,
     *     Recurrence?: RecurrenceSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
