<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $sequenceStoreId
 * @property string|null $subjectId
 * @property string|null $sampleId
 * @property 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED' $status
 * @property string|null $name
 * @property string|null $description
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $fileType
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\SequenceInformation|null $sequenceInformation
 * @property string|null $referenceArn
 * @property Shapes\ReadSetFiles|null $files
 * @property string|null $statusMessage
 * @property 'IMPORT'|'UPLOAD'|null $creationType
 * @property Shapes\ETag|null $etag
 * @property string|null $creationJobId
 */
class GetReadSetMetadataResponse extends Response
{
}
