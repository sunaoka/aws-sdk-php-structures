<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceFiles $sourceFiles
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $sourceFileType
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED' $status
 * @property string $statusMessage
 * @property string $subjectId
 * @property string $sampleId
 * @property string $generatedFrom
 * @property string $referenceArn
 * @property string $name
 * @property string $description
 * @property array<string, string> $tags
 * @property string $readSetId
 */
class ImportReadSetSourceItem extends Shape
{
    /**
     * @param array{
     *     sourceFiles: SourceFiles,
     *     sourceFileType: 'FASTQ'|'BAM'|'CRAM'|'UBAM',
     *     status: 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED',
     *     statusMessage?: string,
     *     subjectId: string,
     *     sampleId: string,
     *     generatedFrom?: string,
     *     referenceArn?: string,
     *     name?: string,
     *     description?: string,
     *     tags?: array<string, string>,
     *     readSetId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
