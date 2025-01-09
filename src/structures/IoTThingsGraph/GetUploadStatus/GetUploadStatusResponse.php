<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetUploadStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $uploadId
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $uploadStatus
 * @property string $namespaceArn
 * @property string $namespaceName
 * @property int $namespaceVersion
 * @property list<string> $failureReason
 * @property \Aws\Api\DateTimeResult $createdDate
 */
class GetUploadStatusResponse extends Response
{
}
