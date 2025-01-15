<?php

namespace Sunaoka\Aws\Structures\Omics\StartVariantImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationName
 * @property string $roleArn
 * @property list<Shapes\VariantImportItemSource> $items
 * @property bool|null $runLeftNormalization
 * @property array<string, string>|null $annotationFields
 */
class StartVariantImportJobRequest extends Request
{
    /**
     * @param array{
     *     destinationName: string,
     *     roleArn: string,
     *     items: list<Shapes\VariantImportItemSource>,
     *     runLeftNormalization?: bool|null,
     *     annotationFields?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
