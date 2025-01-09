<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribePlatformVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformArn
 */
class DescribePlatformVersionRequest extends Request
{
    /**
     * @param array{PlatformArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
