<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStoreVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property string $statusMessage
 * @property int $versionSizeBytes
 */
class AnnotationStoreVersionItem extends Shape
{
    /**
     * @param array{
     *     storeId: string,
     *     id: string,
     *     status: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED',
     *     versionArn: string,
     *     name: string,
     *     versionName: string,
     *     description: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     statusMessage: string,
     *     versionSizeBytes: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
