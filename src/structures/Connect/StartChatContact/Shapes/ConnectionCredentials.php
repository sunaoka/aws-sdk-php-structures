<?php

namespace Sunaoka\Aws\Structures\Connect\StartChatContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionToken
 * @property string|null $Expiry
 */
class ConnectionCredentials extends Shape
{
    /**
     * @param array{
     *     ConnectionToken?: string|null,
     *     Expiry?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
