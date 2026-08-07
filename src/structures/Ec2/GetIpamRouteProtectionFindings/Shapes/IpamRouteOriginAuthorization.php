<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRouteProtectionFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Asn
 * @property string|null $Prefix
 * @property int|null $MaxLength
 * @property bool|null $Match
 * @property \Aws\Api\DateTimeResult|null $Expiration
 */
class IpamRouteOriginAuthorization extends Shape
{
    /**
     * @param array{
     *     Asn?: string|null,
     *     Prefix?: string|null,
     *     MaxLength?: int|null,
     *     Match?: bool|null,
     *     Expiration?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
