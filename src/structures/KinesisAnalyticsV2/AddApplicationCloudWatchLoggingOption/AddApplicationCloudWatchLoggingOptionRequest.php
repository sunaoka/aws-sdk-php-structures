<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property Shapes\CloudWatchLoggingOption $CloudWatchLoggingOption
 * @property string $ConditionalToken
 */
class AddApplicationCloudWatchLoggingOptionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int,
     *     CloudWatchLoggingOption: Shapes\CloudWatchLoggingOption,
     *     ConditionalToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
