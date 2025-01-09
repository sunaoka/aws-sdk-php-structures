<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretArn
 * @property UsernamePassword $usernamePassword
 */
class RedshiftCredentials extends Shape
{
    /**
     * @param array{
     *     secretArn?: string,
     *     usernamePassword?: UsernamePassword
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
