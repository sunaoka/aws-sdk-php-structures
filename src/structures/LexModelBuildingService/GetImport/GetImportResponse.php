<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property 'BOT'|'INTENT'|'SLOT_TYPE' $resourceType
 * @property 'OVERWRITE_LATEST'|'FAIL_ON_CONFLICT' $mergeStrategy
 * @property string $importId
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED' $importStatus
 * @property list<string> $failureReason
 * @property \Aws\Api\DateTimeResult $createdDate
 */
class GetImportResponse extends Response
{
}
