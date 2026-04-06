<?php

namespace Sunaoka\Aws\Structures\CloudFront\VerifyDnsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property 'valid-configuration'|'invalid-configuration'|'unknown-configuration' $Status
 * @property string|null $Reason
 */
class DnsConfiguration extends Shape
{
    /**
     * @param array{
     *     Domain: string,
     *     Status: 'valid-configuration'|'invalid-configuration'|'unknown-configuration',
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
