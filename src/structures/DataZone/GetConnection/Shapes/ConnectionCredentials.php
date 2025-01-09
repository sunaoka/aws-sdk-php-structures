<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessKeyId
 * @property \Aws\Api\DateTimeResult $expiration
 * @property string $secretAccessKey
 * @property string $sessionToken
 */
class ConnectionCredentials extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string,
     *     expiration?: \Aws\Api\DateTimeResult,
     *     secretAccessKey?: string,
     *     sessionToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
