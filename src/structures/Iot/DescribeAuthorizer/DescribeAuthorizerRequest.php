<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizerName
 */
class DescribeAuthorizerRequest extends Request
{
    /**
     * @param array{authorizerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
