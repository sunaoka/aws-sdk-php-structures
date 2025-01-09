<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\DescribeKeyValueStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KvsARN
 */
class DescribeKeyValueStoreRequest extends Request
{
    /**
     * @param array{KvsARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
