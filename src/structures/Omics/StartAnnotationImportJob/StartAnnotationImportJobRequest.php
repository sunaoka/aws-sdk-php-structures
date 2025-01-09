<?php

namespace Sunaoka\Aws\Structures\Omics\StartAnnotationImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationName
 * @property string $roleArn
 * @property list<Shapes\AnnotationImportItemSource> $items
 * @property string $versionName
 * @property Shapes\FormatOptions $formatOptions
 * @property bool $runLeftNormalization
 * @property array<string, string> $annotationFields
 */
class StartAnnotationImportJobRequest extends Request
{
    /**
     * @param array{
     *     destinationName: string,
     *     roleArn: string,
     *     items: list<Shapes\AnnotationImportItemSource>,
     *     versionName?: string,
     *     formatOptions?: Shapes\FormatOptions,
     *     runLeftNormalization?: bool,
     *     annotationFields?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
