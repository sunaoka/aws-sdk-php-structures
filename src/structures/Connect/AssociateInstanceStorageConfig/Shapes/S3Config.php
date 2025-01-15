<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateInstanceStorageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $BucketPrefix
 * @property EncryptionConfig|null $EncryptionConfig
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     BucketPrefix: string,
     *     EncryptionConfig?: EncryptionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
