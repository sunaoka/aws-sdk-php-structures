<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginAccessControlConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetOriginAccessControlConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
