<?php

namespace Sunaoka\Aws\Structures\Omics\CreateVariantStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReferenceItem $reference
 * @property string|null $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property Shapes\SseConfig|null $sseConfig
 */
class CreateVariantStoreRequest extends Request
{
    /**
     * @param array{
     *     reference: Shapes\ReferenceItem,
     *     name?: string|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     sseConfig?: Shapes\SseConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
