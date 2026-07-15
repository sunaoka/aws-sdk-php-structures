<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateProfileWithAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property 'normal'|'confirmation_response' $Type
 */
class AgentInputMessage extends Shape
{
    /**
     * @param array{
     *     Body: string,
     *     Type: 'normal'|'confirmation_response'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
