<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceFiles $sourceFiles
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $sourceFileType
 * @property string $subjectId
 * @property string $sampleId
 * @property string $generatedFrom
 * @property string $referenceArn
 * @property string $name
 * @property string $description
 * @property array<string, string> $tags
 */
class StartReadSetImportJobSourceItem extends Shape
{
    /**
     * @param array{
     *     sourceFiles: SourceFiles,
     *     sourceFileType: 'FASTQ'|'BAM'|'CRAM'|'UBAM',
     *     subjectId: string,
     *     sampleId: string,
     *     generatedFrom?: string,
     *     referenceArn?: string,
     *     name?: string,
     *     description?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
