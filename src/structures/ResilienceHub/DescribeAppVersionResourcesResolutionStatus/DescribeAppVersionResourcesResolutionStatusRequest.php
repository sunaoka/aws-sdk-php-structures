<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionResourcesResolutionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string|null $resolutionId
 */
class DescribeAppVersionResourcesResolutionStatusRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     resolutionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
