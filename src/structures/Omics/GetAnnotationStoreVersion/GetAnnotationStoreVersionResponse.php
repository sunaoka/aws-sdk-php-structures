<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationStoreVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $storeId
 * @property string $id
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property string $versionArn
 * @property string $name
 * @property string $versionName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property array<string, string> $tags
 * @property Shapes\VersionOptions $versionOptions
 * @property string $statusMessage
 * @property int $versionSizeBytes
 */
class GetAnnotationStoreVersionResponse extends Response
{
}
