<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeKeyValueStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeKeyValueStoreRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
