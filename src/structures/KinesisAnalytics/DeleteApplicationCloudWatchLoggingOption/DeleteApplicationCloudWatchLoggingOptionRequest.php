<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DeleteApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property string $CloudWatchLoggingOptionId
 */
class DeleteApplicationCloudWatchLoggingOptionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int,
     *     CloudWatchLoggingOptionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
