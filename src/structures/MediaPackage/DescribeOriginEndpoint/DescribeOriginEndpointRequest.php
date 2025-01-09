<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeOriginEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribeOriginEndpointRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
