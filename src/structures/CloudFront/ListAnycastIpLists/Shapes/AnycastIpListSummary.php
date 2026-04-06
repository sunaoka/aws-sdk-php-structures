<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListAnycastIpLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Status
 * @property string $Arn
 * @property int $IpCount
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'ipv4'|'ipv6'|'dualstack'|null $IpAddressType
 * @property string|null $ETag
 * @property IpamConfig|null $IpamConfig
 */
class AnycastIpListSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     Status: string,
     *     Arn: string,
     *     IpCount: int,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     IpAddressType?: 'ipv4'|'ipv6'|'dualstack'|null,
     *     ETag?: string|null,
     *     IpamConfig?: IpamConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
