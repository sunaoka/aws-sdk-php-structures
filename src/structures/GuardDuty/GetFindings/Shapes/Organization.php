<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Asn
 * @property string $AsnOrg
 * @property string $Isp
 * @property string $Org
 */
class Organization extends Shape
{
    /**
     * @param array{
     *     Asn?: string,
     *     AsnOrg?: string,
     *     Isp?: string,
     *     Org?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
