<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetContextStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextStoreId
 */
class GetContextStoreRequest extends Request
{
    /**
     * @param array{ContextStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
