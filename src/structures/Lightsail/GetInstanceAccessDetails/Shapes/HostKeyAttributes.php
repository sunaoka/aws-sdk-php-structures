<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceAccessDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $algorithm
 * @property string|null $publicKey
 * @property \Aws\Api\DateTimeResult|null $witnessedAt
 * @property string|null $fingerprintSHA1
 * @property string|null $fingerprintSHA256
 * @property \Aws\Api\DateTimeResult|null $notValidBefore
 * @property \Aws\Api\DateTimeResult|null $notValidAfter
 */
class HostKeyAttributes extends Shape
{
    /**
     * @param array{
     *     algorithm?: string|null,
     *     publicKey?: string|null,
     *     witnessedAt?: \Aws\Api\DateTimeResult|null,
     *     fingerprintSHA1?: string|null,
     *     fingerprintSHA256?: string|null,
     *     notValidBefore?: \Aws\Api\DateTimeResult|null,
     *     notValidAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
