<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStoreVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $versionName
 * @property string $storeId
 * @property Shapes\VersionOptions $versionOptions
 * @property string $name
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class CreateAnnotationStoreVersionResponse extends Response
{
}
