<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOpenZfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 */
class DescribeLocationFsxOpenZfsRequest extends Request
{
    /**
     * @param array{LocationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
