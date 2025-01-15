<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Asn
 * @property string|null $AsnOrg
 * @property string|null $Isp
 * @property string|null $Org
 */
class Organization extends Shape
{
    /**
     * @param array{
     *     Asn?: string|null,
     *     AsnOrg?: string|null,
     *     Isp?: string|null,
     *     Org?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
