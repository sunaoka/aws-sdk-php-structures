<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentAttributes $agentAttributes
 * @property array<string, string> $customAttributes
 * @property CustomerProfileAttributes $customerProfileAttributes
 * @property SystemAttributes $systemAttributes
 */
class MessageTemplateAttributes extends Shape
{
    /**
     * @param array{
     *     agentAttributes?: AgentAttributes,
     *     customAttributes?: array<string, string>,
     *     customerProfileAttributes?: CustomerProfileAttributes,
     *     systemAttributes?: SystemAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
