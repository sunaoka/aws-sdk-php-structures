<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentAttributes|null $agentAttributes
 * @property array<string, string>|null $customAttributes
 * @property CustomerProfileAttributes|null $customerProfileAttributes
 * @property SystemAttributes|null $systemAttributes
 */
class MessageTemplateAttributes extends Shape
{
    /**
     * @param array{
     *     agentAttributes?: AgentAttributes|null,
     *     customAttributes?: array<string, string>|null,
     *     customerProfileAttributes?: CustomerProfileAttributes|null,
     *     systemAttributes?: SystemAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
