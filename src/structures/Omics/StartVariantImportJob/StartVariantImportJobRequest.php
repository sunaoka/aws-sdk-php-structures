<?php

namespace Sunaoka\Aws\Structures\Omics\StartVariantImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationName
 * @property string $roleArn
 * @property list<Shapes\VariantImportItemSource> $items
 * @property bool $runLeftNormalization
 * @property array<string, string> $annotationFields
 */
class StartVariantImportJobRequest extends Request
{
    /**
     * @param array{
     *     destinationName: string,
     *     roleArn: string,
     *     items: list<Shapes\VariantImportItemSource>,
     *     runLeftNormalization?: bool,
     *     annotationFields?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
