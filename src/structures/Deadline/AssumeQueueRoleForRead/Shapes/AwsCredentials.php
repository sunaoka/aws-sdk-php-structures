<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeQueueRoleForRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessKeyId
 * @property string $secretAccessKey
 * @property string $sessionToken
 * @property \Aws\Api\DateTimeResult $expiration
 */
class AwsCredentials extends Shape
{
    /**
     * @param array{
     *     accessKeyId: string,
     *     secretAccessKey: string,
     *     sessionToken: string,
     *     expiration: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
