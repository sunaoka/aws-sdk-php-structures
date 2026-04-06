<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateVpcOrigin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string|null $AccountId
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property VpcOriginEndpointConfig $VpcOriginEndpointConfig
 */
class VpcOrigin extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Arn: string,
     *     AccountId?: string|null,
     *     Status: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     VpcOriginEndpointConfig: VpcOriginEndpointConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
