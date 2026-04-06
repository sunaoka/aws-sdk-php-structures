<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupResourceArn
 * @property string|null $SourceResourceArn
 * @property string|null $BackupVaultName
 * @property string|null $ObjectKey
 * @property int|null $ObjectSize
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $ETag
 * @property string|null $VersionId
 */
class S3ResultItem extends Shape
{
    /**
     * @param array{
     *     BackupResourceArn?: string|null,
     *     SourceResourceArn?: string|null,
     *     BackupVaultName?: string|null,
     *     ObjectKey?: string|null,
     *     ObjectSize?: int|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ETag?: string|null,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
