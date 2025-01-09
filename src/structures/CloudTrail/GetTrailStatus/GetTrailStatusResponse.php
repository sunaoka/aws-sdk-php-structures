<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetTrailStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $IsLogging
 * @property string $LatestDeliveryError
 * @property string $LatestNotificationError
 * @property \Aws\Api\DateTimeResult $LatestDeliveryTime
 * @property \Aws\Api\DateTimeResult $LatestNotificationTime
 * @property \Aws\Api\DateTimeResult $StartLoggingTime
 * @property \Aws\Api\DateTimeResult $StopLoggingTime
 * @property string $LatestCloudWatchLogsDeliveryError
 * @property \Aws\Api\DateTimeResult $LatestCloudWatchLogsDeliveryTime
 * @property \Aws\Api\DateTimeResult $LatestDigestDeliveryTime
 * @property string $LatestDigestDeliveryError
 * @property string $LatestDeliveryAttemptTime
 * @property string $LatestNotificationAttemptTime
 * @property string $LatestNotificationAttemptSucceeded
 * @property string $LatestDeliveryAttemptSucceeded
 * @property string $TimeLoggingStarted
 * @property string $TimeLoggingStopped
 */
class GetTrailStatusResponse extends Response
{
}
