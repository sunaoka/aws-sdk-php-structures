<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeletePlatformVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformArn
 */
class DeletePlatformVersionRequest extends Request
{
    /**
     * @param array{PlatformArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
