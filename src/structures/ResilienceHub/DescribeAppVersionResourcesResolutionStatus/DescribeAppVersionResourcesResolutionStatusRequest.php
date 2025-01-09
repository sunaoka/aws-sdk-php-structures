<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionResourcesResolutionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string $resolutionId
 */
class DescribeAppVersionResourcesResolutionStatusRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     resolutionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
