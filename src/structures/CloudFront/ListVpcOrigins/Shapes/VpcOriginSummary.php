<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListVpcOrigins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $Arn
 * @property string|null $AccountId
 * @property string $OriginEndpointArn
 * @property 'ipv4'|'dualstack'|null $IpAddressType
 */
class VpcOriginSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     Status: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     Arn: string,
     *     AccountId?: string|null,
     *     OriginEndpointArn: string,
     *     IpAddressType?: 'ipv4'|'dualstack'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
