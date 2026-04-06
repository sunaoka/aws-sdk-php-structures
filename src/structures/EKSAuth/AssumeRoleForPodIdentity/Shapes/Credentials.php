<?php

namespace Sunaoka\Aws\Structures\EKSAuth\AssumeRoleForPodIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionToken
 * @property string $secretAccessKey
 * @property string $accessKeyId
 * @property \Aws\Api\DateTimeResult $expiration
 */
class Credentials extends Shape
{
    /**
     * @param array{
     *     sessionToken: string,
     *     secretAccessKey: string,
     *     accessKeyId: string,
     *     expiration: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
