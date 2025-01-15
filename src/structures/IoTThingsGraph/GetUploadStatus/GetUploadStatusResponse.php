<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetUploadStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $uploadId
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $uploadStatus
 * @property string|null $namespaceArn
 * @property string|null $namespaceName
 * @property int|null $namespaceVersion
 * @property list<string>|null $failureReason
 * @property \Aws\Api\DateTimeResult $createdDate
 */
class GetUploadStatusResponse extends Response
{
}
