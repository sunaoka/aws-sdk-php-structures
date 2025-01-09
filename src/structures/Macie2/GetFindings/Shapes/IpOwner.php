<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $asn
 * @property string $asnOrg
 * @property string $isp
 * @property string $org
 */
class IpOwner extends Shape
{
    /**
     * @param array{
     *     asn?: string,
     *     asnOrg?: string,
     *     isp?: string,
     *     org?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
