<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetAttachedFileMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreationTime
 * @property string $FileArn
 * @property string $FileId
 * @property string $FileName
 * @property int<1, max> $FileSizeInBytes
 * @property 'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED' $FileStatus
 * @property CreatedByInfo $CreatedBy
 * @property 'EMAIL_MESSAGE'|'ATTACHMENT' $FileUseCaseType
 * @property string $AssociatedResourceArn
 * @property array<string, string> $Tags
 */
class AttachedFile extends Shape
{
    /**
     * @param array{
     *     CreationTime: string,
     *     FileArn: string,
     *     FileId: string,
     *     FileName: string,
     *     FileSizeInBytes: int<1, max>,
     *     FileStatus: 'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED',
     *     CreatedBy?: CreatedByInfo,
     *     FileUseCaseType?: 'EMAIL_MESSAGE'|'ATTACHMENT',
     *     AssociatedResourceArn?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
