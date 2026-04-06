<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceFiles $sourceFiles
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $sourceFileType
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED' $status
 * @property string|null $statusMessage
 * @property string $subjectId
 * @property string $sampleId
 * @property string|null $generatedFrom
 * @property string|null $referenceArn
 * @property string|null $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $readSetId
 */
class ImportReadSetSourceItem extends Shape
{
    /**
     * @param array{
     *     sourceFiles: SourceFiles,
     *     sourceFileType: 'FASTQ'|'BAM'|'CRAM'|'UBAM',
     *     status: 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED',
     *     statusMessage?: string|null,
     *     subjectId: string,
     *     sampleId: string,
     *     generatedFrom?: string|null,
     *     referenceArn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     readSetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
