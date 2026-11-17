<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetContextVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextStoreId
 */
class GetContextVersionRequest extends Request
{
    /**
     * @param array{ContextStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
