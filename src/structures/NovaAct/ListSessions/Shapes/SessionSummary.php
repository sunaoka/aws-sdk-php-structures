<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 */
class SessionSummary extends Shape
{
    /**
     * @param array{sessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
