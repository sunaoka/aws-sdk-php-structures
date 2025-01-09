<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ContactIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'REGULAR'|'OVERRIDDEN' $Type
 * @property ShiftDetails $ShiftDetails
 */
class RotationShift extends Shape
{
    /**
     * @param array{
     *     ContactIds?: list<string>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Type?: 'REGULAR'|'OVERRIDDEN',
     *     ShiftDetails?: ShiftDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
