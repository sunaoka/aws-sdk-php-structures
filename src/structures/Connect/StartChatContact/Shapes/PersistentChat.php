<?php

namespace Sunaoka\Aws\Structures\Connect\StartChatContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENTIRE_PAST_SESSION'|'FROM_SEGMENT'|null $RehydrationType
 * @property string|null $SourceContactId
 */
class PersistentChat extends Shape
{
    /**
     * @param array{
     *     RehydrationType?: 'ENTIRE_PAST_SESSION'|'FROM_SEGMENT'|null,
     *     SourceContactId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
