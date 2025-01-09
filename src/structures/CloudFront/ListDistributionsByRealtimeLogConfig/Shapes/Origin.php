<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByRealtimeLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $DomainName
 * @property string $OriginPath
 * @property CustomHeaders $CustomHeaders
 * @property S3OriginConfig $S3OriginConfig
 * @property CustomOriginConfig $CustomOriginConfig
 * @property VpcOriginConfig $VpcOriginConfig
 * @property int $ConnectionAttempts
 * @property int $ConnectionTimeout
 * @property OriginShield $OriginShield
 * @property string $OriginAccessControlId
 */
class Origin extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     DomainName: string,
     *     OriginPath?: string,
     *     CustomHeaders?: CustomHeaders,
     *     S3OriginConfig?: S3OriginConfig,
     *     CustomOriginConfig?: CustomOriginConfig,
     *     VpcOriginConfig?: VpcOriginConfig,
     *     ConnectionAttempts?: int,
     *     ConnectionTimeout?: int,
     *     OriginShield?: OriginShield,
     *     OriginAccessControlId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
