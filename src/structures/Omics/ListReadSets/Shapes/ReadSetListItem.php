<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $sequenceStoreId
 * @property string|null $subjectId
 * @property string|null $sampleId
 * @property 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED' $status
 * @property string|null $name
 * @property string|null $description
 * @property string|null $referenceArn
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $fileType
 * @property SequenceInformation|null $sequenceInformation
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string|null $statusMessage
 * @property 'IMPORT'|'UPLOAD'|null $creationType
 * @property ETag|null $etag
 */
class ReadSetListItem extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     sequenceStoreId: string,
     *     subjectId?: string|null,
     *     sampleId?: string|null,
     *     status: 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED',
     *     name?: string|null,
     *     description?: string|null,
     *     referenceArn?: string|null,
     *     fileType: 'FASTQ'|'BAM'|'CRAM'|'UBAM',
     *     sequenceInformation?: SequenceInformation|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     statusMessage?: string|null,
     *     creationType?: 'IMPORT'|'UPLOAD'|null,
     *     etag?: ETag|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
