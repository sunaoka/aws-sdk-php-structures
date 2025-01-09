<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $ApplicationVersionId
 */
class DescribeApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationVersionId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
