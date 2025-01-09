<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeClientBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 */
class DescribeClientBrandingRequest extends Request
{
    /**
     * @param array{ResourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
