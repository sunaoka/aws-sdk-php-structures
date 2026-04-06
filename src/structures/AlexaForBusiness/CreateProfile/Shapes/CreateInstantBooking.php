<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DurationInMinutes
 * @property bool $Enabled
 */
class CreateInstantBooking extends Shape
{
    /**
     * @param array{
     *     DurationInMinutes: int,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
