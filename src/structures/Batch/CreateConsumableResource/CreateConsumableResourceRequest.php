<?php

namespace Sunaoka\Aws\Structures\Batch\CreateConsumableResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $consumableResourceName
 * @property int|null $totalQuantity
 * @property string|null $resourceType
 * @property array<string, string>|null $tags
 */
class CreateConsumableResourceRequest extends Request
{
    /**
     * @param array{
     *     consumableResourceName: string,
     *     totalQuantity?: int|null,
     *     resourceType?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
