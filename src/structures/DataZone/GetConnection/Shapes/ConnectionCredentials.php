<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessKeyId
 * @property string|null $secretAccessKey
 * @property string|null $sessionToken
 * @property \Aws\Api\DateTimeResult|null $expiration
 */
class ConnectionCredentials extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string|null,
     *     secretAccessKey?: string|null,
     *     sessionToken?: string|null,
     *     expiration?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
