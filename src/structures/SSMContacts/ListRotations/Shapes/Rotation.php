<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RotationArn
 * @property string $Name
 * @property list<string> $ContactIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $TimeZoneId
 * @property RecurrenceSettings $Recurrence
 */
class Rotation extends Shape
{
    /**
     * @param array{
     *     RotationArn: string,
     *     Name: string,
     *     ContactIds?: list<string>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     TimeZoneId?: string,
     *     Recurrence?: RecurrenceSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
