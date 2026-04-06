<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EniPrivateIpAddress
 * @property list<string>|null $EniIpv6Addresses
 * @property string|null $EniId
 */
class NetworkAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     EniPrivateIpAddress?: string|null,
     *     EniIpv6Addresses?: list<string>|null,
     *     EniId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
