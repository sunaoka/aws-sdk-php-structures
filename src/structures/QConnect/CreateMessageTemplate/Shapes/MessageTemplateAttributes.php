<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemAttributes|null $systemAttributes
 * @property AgentAttributes|null $agentAttributes
 * @property CustomerProfileAttributes|null $customerProfileAttributes
 * @property array<string, string>|null $customAttributes
 */
class MessageTemplateAttributes extends Shape
{
    /**
     * @param array{
     *     systemAttributes?: SystemAttributes|null,
     *     agentAttributes?: AgentAttributes|null,
     *     customerProfileAttributes?: CustomerProfileAttributes|null,
     *     customAttributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
