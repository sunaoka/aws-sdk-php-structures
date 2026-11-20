<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccountBulkJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property string|null $FileName
 * @property int $TotalRecords
 * @property int $ProcessedRecords
 * @property int $SuccessCount
 * @property int $FailureCount
 * @property int $DeletedCount
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $CompletedAt
 */
class GetCustomerAccountBulkJobResponse extends Response
{
}
