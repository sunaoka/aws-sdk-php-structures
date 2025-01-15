<?php

namespace Sunaoka\Aws\Structures\Omics\StartAnnotationImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationName
 * @property string $roleArn
 * @property list<Shapes\AnnotationImportItemSource> $items
 * @property string|null $versionName
 * @property Shapes\FormatOptions|null $formatOptions
 * @property bool|null $runLeftNormalization
 * @property array<string, string>|null $annotationFields
 */
class StartAnnotationImportJobRequest extends Request
{
    /**
     * @param array{
     *     destinationName: string,
     *     roleArn: string,
     *     items: list<Shapes\AnnotationImportItemSource>,
     *     versionName?: string|null,
     *     formatOptions?: Shapes\FormatOptions|null,
     *     runLeftNormalization?: bool|null,
     *     annotationFields?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
