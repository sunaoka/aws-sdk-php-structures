<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 */
class DescribeLocationS3Request extends Request
{
    /**
     * @param array{LocationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
