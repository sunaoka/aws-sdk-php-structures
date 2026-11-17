<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property string $arn
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<Shapes\MemoryStrategy>|null $memoryStrategies
 * @property int<1, 365>|null $eventExpiryDays
 * @property int<0, 3650>|null $memoryExpiryDays
 * @property string|null $extractionModelId
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class GetSpaceResponse extends Response
{
}
