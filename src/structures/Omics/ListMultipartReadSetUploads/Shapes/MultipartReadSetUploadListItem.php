<?php

namespace Sunaoka\Aws\Structures\Omics\ListMultipartReadSetUploads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sequenceStoreId
 * @property string $uploadId
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $sourceFileType
 * @property string $subjectId
 * @property string $sampleId
 * @property string $generatedFrom
 * @property string $referenceArn
 * @property string|null $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class MultipartReadSetUploadListItem extends Shape
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     uploadId: string,
     *     sourceFileType: 'FASTQ'|'BAM'|'CRAM'|'UBAM',
     *     subjectId: string,
     *     sampleId: string,
     *     generatedFrom: string,
     *     referenceArn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
