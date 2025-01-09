<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateAnnotationStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property Shapes\ReferenceItem $reference
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property Shapes\StoreOptions $storeOptions
 * @property 'GFF'|'TSV'|'VCF' $storeFormat
 */
class UpdateAnnotationStoreResponse extends Response
{
}
