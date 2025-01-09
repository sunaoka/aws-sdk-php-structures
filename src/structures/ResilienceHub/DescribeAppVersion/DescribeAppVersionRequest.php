<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 */
class DescribeAppVersionRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
