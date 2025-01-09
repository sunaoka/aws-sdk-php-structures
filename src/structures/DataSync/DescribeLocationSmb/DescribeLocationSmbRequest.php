<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationSmb;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 */
class DescribeLocationSmbRequest extends Request
{
    /**
     * @param array{LocationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
