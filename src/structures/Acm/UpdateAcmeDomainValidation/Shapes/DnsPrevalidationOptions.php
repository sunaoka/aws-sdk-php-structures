<?php

namespace Sunaoka\Aws\Structures\Acm\UpdateAcmeDomainValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainScope|null $DomainScope
 * @property string|null $HostedZoneId
 */
class DnsPrevalidationOptions extends Shape
{
    /**
     * @param array{
     *     DomainScope?: DomainScope|null,
     *     HostedZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
