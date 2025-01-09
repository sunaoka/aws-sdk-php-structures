<?php

namespace Sunaoka\Aws\Structures\Glue\GetSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3Encryption> $S3Encryption
 * @property CloudWatchEncryption $CloudWatchEncryption
 * @property JobBookmarksEncryption $JobBookmarksEncryption
 * @property DataQualityEncryption $DataQualityEncryption
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     S3Encryption?: list<S3Encryption>,
     *     CloudWatchEncryption?: CloudWatchEncryption,
     *     JobBookmarksEncryption?: JobBookmarksEncryption,
     *     DataQualityEncryption?: DataQualityEncryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
