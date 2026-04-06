<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $referenceStoreId
 * @property string $md5
 * @property 'ACTIVE'|'DELETING'|'DELETED'|null $status
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property Shapes\ReferenceFiles|null $files
 */
class GetReferenceMetadataResponse extends Response
{
}
