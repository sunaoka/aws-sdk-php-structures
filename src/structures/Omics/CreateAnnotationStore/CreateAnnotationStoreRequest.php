<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReferenceItem $reference
 * @property string $name
 * @property string $description
 * @property array<string, string> $tags
 * @property string $versionName
 * @property Shapes\SseConfig $sseConfig
 * @property 'GFF'|'TSV'|'VCF' $storeFormat
 * @property Shapes\StoreOptions $storeOptions
 */
class CreateAnnotationStoreRequest extends Request
{
    /**
     * @param array{
     *     reference?: Shapes\ReferenceItem,
     *     name?: string,
     *     description?: string,
     *     tags?: array<string, string>,
     *     versionName?: string,
     *     sseConfig?: Shapes\SseConfig,
     *     storeFormat: 'GFF'|'TSV'|'VCF',
     *     storeOptions?: Shapes\StoreOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
