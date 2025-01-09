<?php

namespace Sunaoka\Aws\Structures\Connect\ListInstanceStorageConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $BucketPrefix
 * @property EncryptionConfig $EncryptionConfig
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     BucketPrefix: string,
     *     EncryptionConfig?: EncryptionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
