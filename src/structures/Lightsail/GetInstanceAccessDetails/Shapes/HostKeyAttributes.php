<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceAccessDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $algorithm
 * @property string $publicKey
 * @property \Aws\Api\DateTimeResult $witnessedAt
 * @property string $fingerprintSHA1
 * @property string $fingerprintSHA256
 * @property \Aws\Api\DateTimeResult $notValidBefore
 * @property \Aws\Api\DateTimeResult $notValidAfter
 */
class HostKeyAttributes extends Shape
{
    /**
     * @param array{
     *     algorithm?: string,
     *     publicKey?: string,
     *     witnessedAt?: \Aws\Api\DateTimeResult,
     *     fingerprintSHA1?: string,
     *     fingerprintSHA256?: string,
     *     notValidBefore?: \Aws\Api\DateTimeResult,
     *     notValidAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
