<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Asn
 * @property string $AsnOrg
 * @property string $Isp
 * @property string $Org
 */
class IpOrganizationDetails extends Shape
{
    /**
     * @param array{
     *     Asn?: int,
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
