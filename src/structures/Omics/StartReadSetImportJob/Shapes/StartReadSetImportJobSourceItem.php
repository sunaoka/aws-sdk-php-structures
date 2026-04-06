<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceFiles $sourceFiles
 * @property 'FASTQ'|'BAM'|'CRAM'|'UBAM' $sourceFileType
 * @property string $subjectId
 * @property string $sampleId
 * @property string|null $generatedFrom
 * @property string|null $referenceArn
 * @property string|null $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class StartReadSetImportJobSourceItem extends Shape
{
    /**
     * @param array{
     *     sourceFiles: SourceFiles,
     *     sourceFileType: 'FASTQ'|'BAM'|'CRAM'|'UBAM',
     *     subjectId: string,
     *     sampleId: string,
     *     generatedFrom?: string|null,
     *     referenceArn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
