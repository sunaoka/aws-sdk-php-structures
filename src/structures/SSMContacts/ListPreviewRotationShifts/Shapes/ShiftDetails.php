<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $OverriddenContactIds
 */
class ShiftDetails extends Shape
{
    /**
     * @param array{OverriddenContactIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
