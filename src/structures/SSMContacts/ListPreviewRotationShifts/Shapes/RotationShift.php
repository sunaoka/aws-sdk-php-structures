<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ContactIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'REGULAR'|'OVERRIDDEN'|null $Type
 * @property ShiftDetails|null $ShiftDetails
 */
class RotationShift extends Shape
{
    /**
     * @param array{
     *     ContactIds?: list<string>|null,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Type?: 'REGULAR'|'OVERRIDDEN'|null,
     *     ShiftDetails?: ShiftDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
