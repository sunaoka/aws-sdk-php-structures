<?php

namespace Sunaoka\Aws\Structures\S3Control\GetDataAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessKeyId
 * @property string|null $SecretAccessKey
 * @property string|null $SessionToken
 * @property \Aws\Api\DateTimeResult|null $Expiration
 */
class Credentials extends Shape
{
    /**
     * @param array{
     *     AccessKeyId?: string|null,
     *     SecretAccessKey?: string|null,
     *     SessionToken?: string|null,
     *     Expiration?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
