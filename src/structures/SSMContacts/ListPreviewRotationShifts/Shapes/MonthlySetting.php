<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DayOfMonth
 * @property HandOffTime $HandOffTime
 */
class MonthlySetting extends Shape
{
    /**
     * @param array{
     *     DayOfMonth: int,
     *     HandOffTime: HandOffTime
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
