<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateConsumableResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $consumableResource
 * @property string|null $operation
 * @property int|null $quantity
 * @property string|null $clientToken
 */
class UpdateConsumableResourceRequest extends Request
{
    /**
     * @param array{
     *     consumableResource: string,
     *     operation?: string|null,
     *     quantity?: int|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
