<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property AfterContactWorkConfig $AfterContactWorkConfig
 * @property AfterContactWorkConfig|null $AgentFirstCallbackAfterContactWorkConfig
 */
class AfterContactWorkConfigPerChannel extends Shape
{
    /**
     * @param array{
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     AfterContactWorkConfig: AfterContactWorkConfig,
     *     AgentFirstCallbackAfterContactWorkConfig?: AfterContactWorkConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
