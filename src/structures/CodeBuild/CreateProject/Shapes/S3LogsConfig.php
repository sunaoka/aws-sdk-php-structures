<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $status
 * @property string|null $location
 * @property bool|null $encryptionDisabled
 * @property 'NONE'|'READ_ONLY'|'FULL'|null $bucketOwnerAccess
 */
class S3LogsConfig extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'DISABLED',
     *     location?: string|null,
     *     encryptionDisabled?: bool|null,
     *     bucketOwnerAccess?: 'NONE'|'READ_ONLY'|'FULL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
