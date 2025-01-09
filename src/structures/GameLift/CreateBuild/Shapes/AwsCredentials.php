<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessKeyId
 * @property string $SecretAccessKey
 * @property string $SessionToken
 */
class AwsCredentials extends Shape
{
    /**
     * @param array{
     *     AccessKeyId?: string,
     *     SecretAccessKey?: string,
     *     SessionToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
