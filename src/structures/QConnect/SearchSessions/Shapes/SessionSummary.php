<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantArn
 * @property string $assistantId
 * @property string $sessionArn
 * @property string $sessionId
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     assistantArn: string,
     *     assistantId: string,
     *     sessionArn: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
