<?php

namespace Sunaoka\Aws\Structures\Omics\CreateMultipartReadSetUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $clientToken
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $sourceFileType
 * @property string $subjectId
 * @property string $sampleId
 * @property string $generatedFrom
 * @property string $referenceArn
 * @property string $name
 * @property string $description
 * @property array<string, string> $tags
 */
class CreateMultipartReadSetUploadRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     clientToken?: string,
     *     sourceFileType: 'FASTQ'|'BAM'|'CRAM'|'UBAM',
     *     subjectId: string,
     *     sampleId: string,
     *     generatedFrom?: string,
     *     referenceArn?: string,
     *     name: string,
     *     description?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
