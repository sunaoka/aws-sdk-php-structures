<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetCredentialsForIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessKeyId
 * @property string $SecretKey
 * @property string $SessionToken
 * @property \Aws\Api\DateTimeResult $Expiration
 */
class Credentials extends Shape
{
    /**
     * @param array{
     *     AccessKeyId?: string,
     *     SecretKey?: string,
     *     SessionToken?: string,
     *     Expiration?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
