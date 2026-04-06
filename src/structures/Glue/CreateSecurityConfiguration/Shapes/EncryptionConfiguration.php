<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3Encryption>|null $S3Encryption
 * @property CloudWatchEncryption|null $CloudWatchEncryption
 * @property JobBookmarksEncryption|null $JobBookmarksEncryption
 * @property DataQualityEncryption|null $DataQualityEncryption
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     S3Encryption?: list<S3Encryption>|null,
     *     CloudWatchEncryption?: CloudWatchEncryption|null,
     *     JobBookmarksEncryption?: JobBookmarksEncryption|null,
     *     DataQualityEncryption?: DataQualityEncryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
