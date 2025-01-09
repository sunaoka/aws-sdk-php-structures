<?php

namespace Sunaoka\Aws\Structures\Connect\StartChatContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DisplayName
 */
class ParticipantDetails extends Shape
{
    /**
     * @param array{DisplayName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
