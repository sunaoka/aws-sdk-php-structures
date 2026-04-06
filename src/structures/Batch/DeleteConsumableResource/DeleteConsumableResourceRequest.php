<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteConsumableResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $consumableResource
 */
class DeleteConsumableResourceRequest extends Request
{
    /**
     * @param array{consumableResource: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
