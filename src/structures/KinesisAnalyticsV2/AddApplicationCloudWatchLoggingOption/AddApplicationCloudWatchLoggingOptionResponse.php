<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationARN
 * @property int $ApplicationVersionId
 * @property list<Shapes\CloudWatchLoggingOptionDescription> $CloudWatchLoggingOptionDescriptions
 * @property string $OperationId
 */
class AddApplicationCloudWatchLoggingOptionResponse extends Response
{
}
