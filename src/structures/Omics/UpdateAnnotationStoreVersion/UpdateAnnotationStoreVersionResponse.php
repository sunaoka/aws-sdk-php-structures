<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateAnnotationStoreVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $storeId
 * @property string $id
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property string $name
 * @property string $versionName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class UpdateAnnotationStoreVersionResponse extends Response
{
}
