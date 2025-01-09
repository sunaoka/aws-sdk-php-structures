<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupResourceArn
 * @property string $SourceResourceArn
 * @property string $BackupVaultName
 * @property string $ObjectKey
 * @property int $ObjectSize
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $ETag
 * @property string $VersionId
 */
class S3ResultItem extends Shape
{
    /**
     * @param array{
     *     BackupResourceArn?: string,
     *     SourceResourceArn?: string,
     *     BackupVaultName?: string,
     *     ObjectKey?: string,
     *     ObjectSize?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     ETag?: string,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
