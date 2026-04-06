<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateAccessSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cidr
 * @property string|null $clientToken
 * @property 'IPV4'|'IPV6'|null $ipAddressType
 * @property string|null $name
 * @property string $dnsViewId
 * @property 'DO53'|'DOH'|'DOT' $protocol
 * @property array<string, string>|null $tags
 */
class CreateAccessSourceRequest extends Request
{
    /**
     * @param array{
     *     cidr: string,
     *     clientToken?: string|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|null,
     *     name?: string|null,
     *     dnsViewId: string,
     *     protocol: 'DO53'|'DOH'|'DOT',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
