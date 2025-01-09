<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateOriginAccessControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OriginAccessControlConfig $OriginAccessControlConfig
 */
class CreateOriginAccessControlRequest extends Request
{
    /**
     * @param array{OriginAccessControlConfig: Shapes\OriginAccessControlConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
