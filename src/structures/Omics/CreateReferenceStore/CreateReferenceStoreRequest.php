<?php

namespace Sunaoka\Aws\Structures\Omics\CreateReferenceStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property Shapes\SseConfig $sseConfig
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateReferenceStoreRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     sseConfig?: Shapes\SseConfig,
     *     tags?: array<string, string>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
