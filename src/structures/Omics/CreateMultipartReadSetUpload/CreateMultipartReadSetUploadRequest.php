<?php

namespace Sunaoka\Aws\Structures\Omics\CreateMultipartReadSetUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string|null $clientToken
 * @property 'FASTQ'|'BAM'|'CRAM' $sourceFileType
 * @property string $subjectId
 * @property string $sampleId
 * @property string|null $generatedFrom
 * @property string $referenceArn
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class CreateMultipartReadSetUploadRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     clientToken?: string|null,
     *     sourceFileType: 'FASTQ'|'BAM'|'CRAM',
     *     subjectId: string,
     *     sampleId: string,
     *     generatedFrom?: string|null,
     *     referenceArn: string,
     *     name: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
