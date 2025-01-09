<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMailDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Hostname
 * @property string $Value
 */
class DnsRecord extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Hostname?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
