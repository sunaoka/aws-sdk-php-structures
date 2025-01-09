<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupResourceArn
 * @property string $SourceResourceArn
 * @property string $BackupVaultName
 * @property string $FileSystemIdentifier
 * @property string $FilePath
 * @property int $FileSize
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class EBSResultItem extends Shape
{
    /**
     * @param array{
     *     BackupResourceArn?: string,
     *     SourceResourceArn?: string,
     *     BackupVaultName?: string,
     *     FileSystemIdentifier?: string,
     *     FilePath?: string,
     *     FileSize?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
