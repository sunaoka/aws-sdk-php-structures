<?php

namespace Sunaoka\Aws\Structures\Omics\CreateVariantStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property Shapes\ReferenceItem $reference
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property string $name
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class CreateVariantStoreResponse extends Response
{
}
