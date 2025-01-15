<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $asn
 * @property string|null $asnOrg
 * @property string|null $isp
 * @property string|null $org
 */
class IpOwner extends Shape
{
    /**
     * @param array{
     *     asn?: string|null,
     *     asnOrg?: string|null,
     *     isp?: string|null,
     *     org?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
