<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property string $CloudWatchLoggingOptionId
 * @property string $ConditionalToken
 */
class DeleteApplicationCloudWatchLoggingOptionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int,
     *     CloudWatchLoggingOptionId: string,
     *     ConditionalToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
