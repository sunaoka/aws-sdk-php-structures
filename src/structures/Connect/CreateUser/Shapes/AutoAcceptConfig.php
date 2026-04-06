<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property bool $AutoAccept
 * @property bool|null $AgentFirstCallbackAutoAccept
 */
class AutoAcceptConfig extends Shape
{
    /**
     * @param array{
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     AutoAccept: bool,
     *     AgentFirstCallbackAutoAccept?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
