<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTableBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class CreateTableBucketRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
