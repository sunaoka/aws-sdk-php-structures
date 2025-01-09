<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $referenceStoreId
 * @property string $md5
 * @property 'ACTIVE'|'DELETING'|'DELETED' $status
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property Shapes\ReferenceFiles $files
 * @property 'IMPORT' $creationType
 * @property string $creationJobId
 */
class GetReferenceMetadataResponse extends Response
{
}
