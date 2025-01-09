<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetAccessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessorId
 */
class GetAccessorRequest extends Request
{
    /**
     * @param array{AccessorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
