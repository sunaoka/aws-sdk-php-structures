<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionAppComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string $id
 */
class DescribeAppVersionAppComponentRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
