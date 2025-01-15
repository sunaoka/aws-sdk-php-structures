<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'STARTED'|'FAILED'|null $code
 * @property string|null $message
 */
class DnsRecordCreationState extends Shape
{
    /**
     * @param array{
     *     code?: 'SUCCEEDED'|'STARTED'|'FAILED'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
