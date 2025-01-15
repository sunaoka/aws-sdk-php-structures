<?php

namespace Sunaoka\Aws\Structures\GameLift\GetComputeAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessKeyId
 * @property string|null $SecretAccessKey
 * @property string|null $SessionToken
 */
class AwsCredentials extends Shape
{
    /**
     * @param array{
     *     AccessKeyId?: string|null,
     *     SecretAccessKey?: string|null,
     *     SessionToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
