<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\DeleteAccessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessorId
 */
class DeleteAccessorRequest extends Request
{
    /**
     * @param array{AccessorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
