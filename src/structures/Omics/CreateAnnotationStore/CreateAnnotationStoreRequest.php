<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReferenceItem|null $reference
 * @property string|null $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $versionName
 * @property Shapes\SseConfig|null $sseConfig
 * @property 'GFF'|'TSV'|'VCF' $storeFormat
 * @property Shapes\StoreOptions|null $storeOptions
 */
class CreateAnnotationStoreRequest extends Request
{
    /**
     * @param array{
     *     reference?: Shapes\ReferenceItem|null,
     *     name?: string|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     versionName?: string|null,
     *     sseConfig?: Shapes\SseConfig|null,
     *     storeFormat: 'GFF'|'TSV'|'VCF',
     *     storeOptions?: Shapes\StoreOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
