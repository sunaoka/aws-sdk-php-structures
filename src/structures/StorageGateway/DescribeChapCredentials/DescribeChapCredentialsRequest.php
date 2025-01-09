<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeChapCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetARN
 */
class DescribeChapCredentialsRequest extends Request
{
    /**
     * @param array{TargetARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
