<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessKeyId
 * @property \Aws\Api\DateTimeResult|null $expiration
 * @property string|null $secretAccessKey
 * @property string|null $sessionToken
 */
class ConnectionCredentials extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string|null,
     *     expiration?: \Aws\Api\DateTimeResult|null,
     *     secretAccessKey?: string|null,
     *     sessionToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
