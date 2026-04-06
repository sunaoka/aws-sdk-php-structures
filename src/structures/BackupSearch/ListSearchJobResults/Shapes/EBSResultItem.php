<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupResourceArn
 * @property string|null $SourceResourceArn
 * @property string|null $BackupVaultName
 * @property string|null $FileSystemIdentifier
 * @property string|null $FilePath
 * @property int|null $FileSize
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class EBSResultItem extends Shape
{
    /**
     * @param array{
     *     BackupResourceArn?: string|null,
     *     SourceResourceArn?: string|null,
     *     BackupVaultName?: string|null,
     *     FileSystemIdentifier?: string|null,
     *     FilePath?: string|null,
     *     FileSize?: int|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
