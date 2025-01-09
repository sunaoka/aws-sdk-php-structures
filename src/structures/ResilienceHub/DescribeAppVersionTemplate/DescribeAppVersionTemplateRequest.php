<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 */
class DescribeAppVersionTemplateRequest extends Request
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
