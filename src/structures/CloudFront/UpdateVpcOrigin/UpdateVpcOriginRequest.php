<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateVpcOrigin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\VpcOriginEndpointConfig $VpcOriginEndpointConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateVpcOriginRequest extends Request
{
    /**
     * @param array{
     *     VpcOriginEndpointConfig: Shapes\VpcOriginEndpointConfig,
     *     Id: string,
     *     IfMatch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
