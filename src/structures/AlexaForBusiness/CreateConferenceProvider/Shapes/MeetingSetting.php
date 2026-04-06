<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateConferenceProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'YES'|'NO'|'OPTIONAL' $RequirePin
 */
class MeetingSetting extends Shape
{
    /**
     * @param array{RequirePin: 'YES'|'NO'|'OPTIONAL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
