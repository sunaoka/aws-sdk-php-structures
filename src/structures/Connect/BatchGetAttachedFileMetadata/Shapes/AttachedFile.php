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
 * @property CreatedByInfo|null $CreatedBy
 * @property 'EMAIL_MESSAGE'|'ATTACHMENT'|null $FileUseCaseType
 * @property string|null $AssociatedResourceArn
 * @property array<string, string>|null $Tags
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
     *     CreatedBy?: CreatedByInfo|null,
     *     FileUseCaseType?: 'EMAIL_MESSAGE'|'ATTACHMENT'|null,
     *     AssociatedResourceArn?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
