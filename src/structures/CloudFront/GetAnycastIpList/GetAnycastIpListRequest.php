<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetAnycastIpList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetAnycastIpListRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
