<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetUploadJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property string|null $DisplayName
 * @property 'CREATED'|'IN_PROGRESS'|'PARTIALLY_SUCCEEDED'|'SUCCEEDED'|'FAILED'|'STOPPED'|null $Status
 * @property 'VALIDATION_FAILURE'|'INTERNAL_FAILURE'|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $CompletedAt
 * @property array<string, Shapes\ObjectTypeField>|null $Fields
 * @property string|null $UniqueKey
 * @property Shapes\ResultsSummary|null $ResultsSummary
 * @property int<1, 1098>|null $DataExpiry
 */
class GetUploadJobResponse extends Response
{
}
