<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationCloudWatchLoggingOption;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationARN
 * @property int<1, 999999999> $ApplicationVersionId
 * @property list<Shapes\CloudWatchLoggingOptionDescription> $CloudWatchLoggingOptionDescriptions
 * @property string $OperationId
 */
class DeleteApplicationCloudWatchLoggingOptionResponse extends Response
{
}
