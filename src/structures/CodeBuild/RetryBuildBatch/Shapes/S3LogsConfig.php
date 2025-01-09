<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $status
 * @property string $location
 * @property bool $encryptionDisabled
 * @property 'NONE'|'READ_ONLY'|'FULL' $bucketOwnerAccess
 */
class S3LogsConfig extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'DISABLED',
     *     location?: string,
     *     encryptionDisabled?: bool,
     *     bucketOwnerAccess?: 'NONE'|'READ_ONLY'|'FULL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
