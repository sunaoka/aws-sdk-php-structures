<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxLustre;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 */
class DescribeLocationFsxLustreRequest extends Request
{
    /**
     * @param array{LocationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
