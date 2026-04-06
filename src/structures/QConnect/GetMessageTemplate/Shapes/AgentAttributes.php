<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $firstName
 * @property string|null $lastName
 */
class AgentAttributes extends Shape
{
    /**
     * @param array{
     *     firstName?: string|null,
     *     lastName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
