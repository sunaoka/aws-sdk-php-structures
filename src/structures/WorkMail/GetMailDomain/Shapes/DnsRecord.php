<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMailDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Hostname
 * @property string|null $Value
 */
class DnsRecord extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Hostname?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
