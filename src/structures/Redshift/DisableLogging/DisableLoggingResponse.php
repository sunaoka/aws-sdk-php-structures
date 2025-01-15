<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableLogging;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $LoggingEnabled
 * @property string|null $BucketName
 * @property string|null $S3KeyPrefix
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulDeliveryTime
 * @property \Aws\Api\DateTimeResult|null $LastFailureTime
 * @property string|null $LastFailureMessage
 * @property 's3'|'cloudwatch'|null $LogDestinationType
 * @property list<string>|null $LogExports
 */
class DisableLoggingResponse extends Response
{
}
