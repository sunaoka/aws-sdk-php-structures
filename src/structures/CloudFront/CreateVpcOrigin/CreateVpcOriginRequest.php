<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateVpcOrigin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\VpcOriginEndpointConfig $VpcOriginEndpointConfig
 * @property Shapes\Tags $Tags
 */
class CreateVpcOriginRequest extends Request
{
    /**
     * @param array{
     *     VpcOriginEndpointConfig: Shapes\VpcOriginEndpointConfig,
     *     Tags?: Shapes\Tags
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
