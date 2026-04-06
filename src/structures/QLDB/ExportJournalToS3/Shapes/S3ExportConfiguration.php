<?php

namespace Sunaoka\Aws\Structures\QLDB\ExportJournalToS3\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Prefix
 * @property S3EncryptionConfiguration $EncryptionConfiguration
 */
class S3ExportConfiguration extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Prefix: string,
     *     EncryptionConfiguration: S3EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
