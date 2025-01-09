<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetVpcOrigin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetVpcOriginRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
