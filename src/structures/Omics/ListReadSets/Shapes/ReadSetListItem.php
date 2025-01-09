<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $sequenceStoreId
 * @property string $subjectId
 * @property string $sampleId
 * @property 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED' $status
 * @property string $name
 * @property string $description
 * @property string $referenceArn
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $fileType
 * @property SequenceInformation $sequenceInformation
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $statusMessage
 * @property 'IMPORT'|'UPLOAD' $creationType
 * @property ETag $etag
 */
class ReadSetListItem extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     sequenceStoreId: string,
     *     subjectId?: string,
     *     sampleId?: string,
     *     status: 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED',
     *     name?: string,
     *     description?: string,
     *     referenceArn?: string,
     *     fileType: 'FASTQ'|'BAM'|'CRAM'|'UBAM',
     *     sequenceInformation?: SequenceInformation,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     statusMessage?: string,
     *     creationType?: 'IMPORT'|'UPLOAD',
     *     etag?: ETag
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
