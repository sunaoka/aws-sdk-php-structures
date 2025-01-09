<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribeChannelRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
