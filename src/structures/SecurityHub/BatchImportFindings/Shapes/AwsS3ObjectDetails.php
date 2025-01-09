<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LastModified
 * @property string $ETag
 * @property string $VersionId
 * @property string $ContentType
 * @property string $ServerSideEncryption
 * @property string $SSEKMSKeyId
 */
class AwsS3ObjectDetails extends Shape
{
    /**
     * @param array{
     *     LastModified?: string,
     *     ETag?: string,
     *     VersionId?: string,
     *     ContentType?: string,
     *     ServerSideEncryption?: string,
     *     SSEKMSKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
