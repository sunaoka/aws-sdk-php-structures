<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationARN
 * @property int<1, 999999999>|null $ApplicationVersionId
 * @property list<Shapes\CloudWatchLoggingOptionDescription>|null $CloudWatchLoggingOptionDescriptions
 * @property string|null $OperationId
 */
class AddApplicationCloudWatchLoggingOptionResponse extends Response
{
}
