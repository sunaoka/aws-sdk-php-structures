<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateAccessSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessSourceId
 * @property string|null $cidr
 * @property string|null $dnsViewId
 * @property 'IPV4'|'IPV6'|'NONE'|null $ipAddressType
 * @property string|null $name
 * @property 'DO53'|'DOH'|'DOT'|null $protocol
 */
class UpdateAccessSourceRequest extends Request
{
    /**
     * @param array{
     *     accessSourceId: string,
     *     cidr?: string|null,
     *     dnsViewId?: string|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|'NONE'|null,
     *     name?: string|null,
     *     protocol?: 'DO53'|'DOH'|'DOT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
