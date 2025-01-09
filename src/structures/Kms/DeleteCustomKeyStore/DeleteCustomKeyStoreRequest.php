<?php

namespace Sunaoka\Aws\Structures\Kms\DeleteCustomKeyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomKeyStoreId
 */
class DeleteCustomKeyStoreRequest extends Request
{
    /**
     * @param array{CustomKeyStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
