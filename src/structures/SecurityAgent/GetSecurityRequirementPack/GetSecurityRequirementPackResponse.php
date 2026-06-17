<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetSecurityRequirementPack;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $packId
 * @property string $name
 * @property string|null $description
 * @property string|null $vendorName
 * @property 'AWS_MANAGED'|'CUSTOMER_MANAGED' $managementType
 * @property 'ENABLED'|'DISABLED' $status
 * @property 'PENDING'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $importStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $kmsKeyId
 */
class GetSecurityRequirementPackResponse extends Response
{
}
