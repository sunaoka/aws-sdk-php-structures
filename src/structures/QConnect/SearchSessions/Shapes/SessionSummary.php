<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property string $assistantId
 * @property string $assistantArn
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     sessionArn: string,
     *     assistantId: string,
     *     assistantArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
