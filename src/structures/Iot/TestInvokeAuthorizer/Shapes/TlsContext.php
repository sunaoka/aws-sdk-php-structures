<?php

namespace Sunaoka\Aws\Structures\Iot\TestInvokeAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serverName
 */
class TlsContext extends Shape
{
    /**
     * @param array{serverName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
