<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property string $BucketUrl
 * @property string|null $MetadataFilesLocation
 */
class S3KnowledgeBaseParameters extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     BucketUrl: string,
     *     MetadataFilesLocation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
