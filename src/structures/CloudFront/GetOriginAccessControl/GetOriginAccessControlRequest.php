<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginAccessControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetOriginAccessControlRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
