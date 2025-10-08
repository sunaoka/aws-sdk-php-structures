<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecordExpiration $RecordExpiration
 * @property MetadataTableEncryptionConfiguration|null $EncryptionConfiguration
 */
class JournalTableConfiguration extends Shape
{
    /**
     * @param array{
     *     RecordExpiration: RecordExpiration,
     *     EncryptionConfiguration?: MetadataTableEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
