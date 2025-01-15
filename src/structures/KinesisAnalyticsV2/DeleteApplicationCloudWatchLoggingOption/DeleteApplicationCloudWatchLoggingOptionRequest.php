<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999>|null $CurrentApplicationVersionId
 * @property string $CloudWatchLoggingOptionId
 * @property string|null $ConditionalToken
 */
class DeleteApplicationCloudWatchLoggingOptionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int<1, 999999999>|null,
     *     CloudWatchLoggingOptionId: string,
     *     ConditionalToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
