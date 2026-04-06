<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DurationInMinutes
 * @property bool|null $Enabled
 */
class UpdateInstantBooking extends Shape
{
    /**
     * @param array{
     *     DurationInMinutes?: int|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
