<?php

namespace Sunaoka\Aws\Structures\Connect\StartChatContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCREMENTAL'|'COMPLETE'|null $ResponseMode
 */
class ParticipantConfiguration extends Shape
{
    /**
     * @param array{ResponseMode?: 'INCREMENTAL'|'COMPLETE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
