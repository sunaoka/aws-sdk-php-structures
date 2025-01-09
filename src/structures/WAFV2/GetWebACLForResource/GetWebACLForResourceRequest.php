<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class GetWebACLForResourceRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
