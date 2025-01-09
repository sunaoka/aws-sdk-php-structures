<?php

namespace Sunaoka\Aws\Structures\Omics\GetVariantStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property Shapes\ReferenceItem $reference
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property string $storeArn
 * @property string $name
 * @property string $description
 * @property Shapes\SseConfig $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property array<string, string> $tags
 * @property string $statusMessage
 * @property int $storeSizeBytes
 */
class GetVariantStoreResponse extends Response
{
}
