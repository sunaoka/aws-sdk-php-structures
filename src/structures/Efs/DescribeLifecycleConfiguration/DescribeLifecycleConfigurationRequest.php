<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeLifecycleConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 */
class DescribeLifecycleConfigurationRequest extends Request
{
    /**
     * @param array{FileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
