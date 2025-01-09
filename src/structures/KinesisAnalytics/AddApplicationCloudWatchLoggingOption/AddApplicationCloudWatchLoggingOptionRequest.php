<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property Shapes\CloudWatchLoggingOption $CloudWatchLoggingOption
 */
class AddApplicationCloudWatchLoggingOptionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int,
     *     CloudWatchLoggingOption: Shapes\CloudWatchLoggingOption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
