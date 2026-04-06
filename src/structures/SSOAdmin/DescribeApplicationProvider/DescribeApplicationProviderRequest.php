<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplicationProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationProviderArn
 */
class DescribeApplicationProviderRequest extends Request
{
    /**
     * @param array{ApplicationProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
