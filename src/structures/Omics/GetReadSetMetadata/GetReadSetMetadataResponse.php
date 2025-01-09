<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $sequenceStoreId
 * @property string $subjectId
 * @property string $sampleId
 * @property 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED' $status
 * @property string $name
 * @property string $description
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $fileType
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\SequenceInformation $sequenceInformation
 * @property string $referenceArn
 * @property Shapes\ReadSetFiles $files
 * @property string $statusMessage
 * @property 'IMPORT'|'UPLOAD' $creationType
 * @property Shapes\ETag $etag
 * @property string $creationJobId
 */
class GetReadSetMetadataResponse extends Response
{
}
