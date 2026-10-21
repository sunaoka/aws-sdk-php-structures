<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateProfileWithAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FinalResponseMessage
 * @property list<string>|null $Options
 * @property string|null $ConversationId
 */
class EndOfOutputEvent extends Shape
{
    /**
     * @param array{
     *     FinalResponseMessage: string,
     *     Options?: list<string>|null,
     *     ConversationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
