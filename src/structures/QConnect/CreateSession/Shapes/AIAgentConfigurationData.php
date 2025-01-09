<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiAgentId
 */
class AIAgentConfigurationData extends Shape
{
    /**
     * @param array{aiAgentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
