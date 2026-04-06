<?php

namespace Sunaoka\Aws\Structures\Omics\CreateSequenceStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\SseConfig|null $sseConfig
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 * @property string|null $fallbackLocation
 */
class CreateSequenceStoreRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     sseConfig?: Shapes\SseConfig|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null,
     *     fallbackLocation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
