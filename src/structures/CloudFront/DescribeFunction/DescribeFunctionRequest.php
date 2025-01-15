<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'DEVELOPMENT'|'LIVE'|null $Stage
 */
class DescribeFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Stage?: 'DEVELOPMENT'|'LIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
