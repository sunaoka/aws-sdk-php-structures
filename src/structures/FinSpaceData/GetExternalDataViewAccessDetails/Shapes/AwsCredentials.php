<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetExternalDataViewAccessDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessKeyId
 * @property string $secretAccessKey
 * @property string $sessionToken
 * @property int $expiration
 */
class AwsCredentials extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string,
     *     secretAccessKey?: string,
     *     sessionToken?: string,
     *     expiration?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
