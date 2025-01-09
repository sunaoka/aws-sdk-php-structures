<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateVariantStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property Shapes\ReferenceItem $reference
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class UpdateVariantStoreResponse extends Response
{
}
