<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $firstName
 * @property string $lastName
 */
class AgentAttributes extends Shape
{
    /**
     * @param array{
     *     firstName?: string,
     *     lastName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
