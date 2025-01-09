<?php

namespace Sunaoka\Aws\Structures\Kms\ConnectCustomKeyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomKeyStoreId
 */
class ConnectCustomKeyStoreRequest extends Request
{
    /**
     * @param array{CustomKeyStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
