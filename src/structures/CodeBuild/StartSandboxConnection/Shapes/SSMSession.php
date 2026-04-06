<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartSandboxConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sessionId
 * @property string|null $tokenValue
 * @property string|null $streamUrl
 */
class SSMSession extends Shape
{
    /**
     * @param array{
     *     sessionId?: string|null,
     *     tokenValue?: string|null,
     *     streamUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
