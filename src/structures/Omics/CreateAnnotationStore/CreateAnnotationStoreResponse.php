<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property Shapes\ReferenceItem|null $reference
 * @property 'GFF'|'TSV'|'VCF'|null $storeFormat
 * @property Shapes\StoreOptions|null $storeOptions
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property string $name
 * @property string $versionName
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class CreateAnnotationStoreResponse extends Response
{
}
