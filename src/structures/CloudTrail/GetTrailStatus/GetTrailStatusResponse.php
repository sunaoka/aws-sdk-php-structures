<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetTrailStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $IsLogging
 * @property string|null $LatestDeliveryError
 * @property string|null $LatestNotificationError
 * @property \Aws\Api\DateTimeResult|null $LatestDeliveryTime
 * @property \Aws\Api\DateTimeResult|null $LatestNotificationTime
 * @property \Aws\Api\DateTimeResult|null $StartLoggingTime
 * @property \Aws\Api\DateTimeResult|null $StopLoggingTime
 * @property string|null $LatestCloudWatchLogsDeliveryError
 * @property \Aws\Api\DateTimeResult|null $LatestCloudWatchLogsDeliveryTime
 * @property \Aws\Api\DateTimeResult|null $LatestDigestDeliveryTime
 * @property string|null $LatestDigestDeliveryError
 * @property string|null $LatestDeliveryAttemptTime
 * @property string|null $LatestNotificationAttemptTime
 * @property string|null $LatestNotificationAttemptSucceeded
 * @property string|null $LatestDeliveryAttemptSucceeded
 * @property string|null $TimeLoggingStarted
 * @property string|null $TimeLoggingStopped
 */
class GetTrailStatusResponse extends Response
{
}
