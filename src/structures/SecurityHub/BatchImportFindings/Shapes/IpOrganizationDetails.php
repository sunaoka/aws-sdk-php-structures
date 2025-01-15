<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Asn
 * @property string|null $AsnOrg
 * @property string|null $Isp
 * @property string|null $Org
 */
class IpOrganizationDetails extends Shape
{
    /**
     * @param array{
     *     Asn?: int|null,
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
