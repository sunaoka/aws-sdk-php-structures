<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999> $ApplicationVersionId
 */
class DescribeApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationVersionId: int<1, 999999999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
