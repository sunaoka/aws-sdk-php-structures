<?php

namespace Sunaoka\Aws\Structures\Sts\GetScopedCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScopedSessionId
 * @property string $Arn
 */
class ScopedSession extends Shape
{
    /**
     * @param array{
     *     ScopedSessionId: string,
     *     Arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
