<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'DEVELOPMENT'|'LIVE' $Stage
 */
class DescribeFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Stage?: 'DEVELOPMENT'|'LIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
