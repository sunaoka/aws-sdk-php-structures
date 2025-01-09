<?php

namespace Sunaoka\Aws\Structures\Omics\CreateVariantStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReferenceItem $reference
 * @property string $name
 * @property string $description
 * @property array<string, string> $tags
 * @property Shapes\SseConfig $sseConfig
 */
class CreateVariantStoreRequest extends Request
{
    /**
     * @param array{
     *     reference: Shapes\ReferenceItem,
     *     name?: string,
     *     description?: string,
     *     tags?: array<string, string>,
     *     sseConfig?: Shapes\SseConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
