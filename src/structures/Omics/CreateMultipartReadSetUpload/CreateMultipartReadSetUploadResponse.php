<?php

namespace Sunaoka\Aws\Structures\Omics\CreateMultipartReadSetUpload;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sequenceStoreId
 * @property string $uploadId
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $sourceFileType
 * @property string $subjectId
 * @property string $sampleId
 * @property string $generatedFrom
 * @property string $referenceArn
 * @property string $name
 * @property string $description
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class CreateMultipartReadSetUploadResponse extends Response
{
}
