<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOntap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 */
class DescribeLocationFsxOntapRequest extends Request
{
    /**
     * @param array{LocationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
