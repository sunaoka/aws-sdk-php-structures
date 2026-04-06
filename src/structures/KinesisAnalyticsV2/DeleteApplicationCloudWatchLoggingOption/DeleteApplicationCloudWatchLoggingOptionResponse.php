<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationARN
 * @property int<1, 999999999>|null $ApplicationVersionId
 * @property list<Shapes\CloudWatchLoggingOptionDescription>|null $CloudWatchLoggingOptionDescriptions
 * @property string|null $OperationId
 */
class DeleteApplicationCloudWatchLoggingOptionResponse extends Response
{
}
