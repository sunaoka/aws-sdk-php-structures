<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeConnectionFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'DEVELOPMENT'|'LIVE'|null $Stage
 */
class DescribeConnectionFunctionRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Stage?: 'DEVELOPMENT'|'LIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
