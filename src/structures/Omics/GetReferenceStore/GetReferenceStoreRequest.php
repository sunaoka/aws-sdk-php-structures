<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetReferenceStoreRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
