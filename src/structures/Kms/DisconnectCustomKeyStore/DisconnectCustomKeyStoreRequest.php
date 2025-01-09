<?php

namespace Sunaoka\Aws\Structures\Kms\DisconnectCustomKeyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomKeyStoreId
 */
class DisconnectCustomKeyStoreRequest extends Request
{
    /**
     * @param array{CustomKeyStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
