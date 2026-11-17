<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateContextStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextStoreId
 * @property string|null $Description
 */
class UpdateContextStoreRequest extends Request
{
    /**
     * @param array{
     *     ContextStoreId: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
