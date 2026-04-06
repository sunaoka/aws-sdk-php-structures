<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAccessToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessKeyId
 * @property string $SecretAccessKey
 * @property string $SessionToken
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 */
class Credentials extends Shape
{
    /**
     * @param array{
     *     AccessKeyId: string,
     *     SecretAccessKey: string,
     *     SessionToken: string,
     *     ExpirationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
