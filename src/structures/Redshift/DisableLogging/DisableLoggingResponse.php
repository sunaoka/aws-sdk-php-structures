<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableLogging;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $LoggingEnabled
 * @property string $BucketName
 * @property string $S3KeyPrefix
 * @property \Aws\Api\DateTimeResult $LastSuccessfulDeliveryTime
 * @property \Aws\Api\DateTimeResult $LastFailureTime
 * @property string $LastFailureMessage
 * @property 's3'|'cloudwatch' $LogDestinationType
 * @property list<string> $LogExports
 */
class DisableLoggingResponse extends Response
{
}
