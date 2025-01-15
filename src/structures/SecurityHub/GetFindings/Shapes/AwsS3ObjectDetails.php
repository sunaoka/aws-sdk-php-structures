<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LastModified
 * @property string|null $ETag
 * @property string|null $VersionId
 * @property string|null $ContentType
 * @property string|null $ServerSideEncryption
 * @property string|null $SSEKMSKeyId
 */
class AwsS3ObjectDetails extends Shape
{
    /**
     * @param array{
     *     LastModified?: string|null,
     *     ETag?: string|null,
     *     VersionId?: string|null,
     *     ContentType?: string|null,
     *     ServerSideEncryption?: string|null,
     *     SSEKMSKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
