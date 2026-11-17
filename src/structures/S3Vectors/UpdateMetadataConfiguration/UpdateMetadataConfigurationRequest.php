<?php

namespace Sunaoka\Aws\Structures\S3Vectors\UpdateMetadataConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $indexName
 * @property string|null $indexArn
 * @property Shapes\MetadataConfigurationAdd|null $add
 * @property Shapes\MetadataConfigurationDelete|null $delete
 */
class UpdateMetadataConfigurationRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     indexName?: string|null,
     *     indexArn?: string|null,
     *     add?: Shapes\MetadataConfigurationAdd|null,
     *     delete?: Shapes\MetadataConfigurationDelete|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
