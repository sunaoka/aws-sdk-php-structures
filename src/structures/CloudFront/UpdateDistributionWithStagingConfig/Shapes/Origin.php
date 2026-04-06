<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $DomainName
 * @property string|null $OriginPath
 * @property CustomHeaders|null $CustomHeaders
 * @property S3OriginConfig|null $S3OriginConfig
 * @property CustomOriginConfig|null $CustomOriginConfig
 * @property VpcOriginConfig|null $VpcOriginConfig
 * @property int|null $ConnectionAttempts
 * @property int|null $ConnectionTimeout
 * @property OriginShield|null $OriginShield
 * @property string|null $OriginAccessControlId
 */
class Origin extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     DomainName: string,
     *     OriginPath?: string|null,
     *     CustomHeaders?: CustomHeaders|null,
     *     S3OriginConfig?: S3OriginConfig|null,
     *     CustomOriginConfig?: CustomOriginConfig|null,
     *     VpcOriginConfig?: VpcOriginConfig|null,
     *     ConnectionAttempts?: int|null,
     *     ConnectionTimeout?: int|null,
     *     OriginShield?: OriginShield|null,
     *     OriginAccessControlId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
