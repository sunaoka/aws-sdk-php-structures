<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ViewId
 */
class DescribeViewRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ViewId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
