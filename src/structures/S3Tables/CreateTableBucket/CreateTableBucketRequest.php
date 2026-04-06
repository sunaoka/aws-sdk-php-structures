<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTableBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property Shapes\StorageClassConfiguration|null $storageClassConfiguration
 * @property array<string, string>|null $tags
 */
class CreateTableBucketRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     storageClassConfiguration?: Shapes\StorageClassConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
