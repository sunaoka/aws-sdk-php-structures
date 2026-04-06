<?php

namespace Sunaoka\Aws\Structures\SimpleDBv2\GetExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $exportArn
 * @property string $clientToken
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $exportStatus
 * @property string $domainName
 * @property \Aws\Api\DateTimeResult $requestedAt
 * @property string $s3Bucket
 * @property string|null $s3KeyPrefix
 * @property 'AES256'|'KMS'|null $s3SseAlgorithm
 * @property string|null $s3SseKmsKeyId
 * @property string|null $s3BucketOwner
 * @property string|null $failureCode
 * @property string|null $failureMessage
 * @property string|null $exportManifest
 * @property int<0, max>|null $itemsCount
 * @property \Aws\Api\DateTimeResult|null $exportDataCutoffTime
 */
class GetExportResponse extends Response
{
}
