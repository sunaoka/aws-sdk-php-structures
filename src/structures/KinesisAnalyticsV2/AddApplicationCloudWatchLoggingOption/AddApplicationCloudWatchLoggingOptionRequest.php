<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999>|null $CurrentApplicationVersionId
 * @property Shapes\CloudWatchLoggingOption $CloudWatchLoggingOption
 * @property string|null $ConditionalToken
 */
class AddApplicationCloudWatchLoggingOptionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int<1, 999999999>|null,
     *     CloudWatchLoggingOption: Shapes\CloudWatchLoggingOption,
     *     ConditionalToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
