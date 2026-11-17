<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteContextStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextStoreId
 */
class DeleteContextStoreRequest extends Request
{
    /**
     * @param array{ContextStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
