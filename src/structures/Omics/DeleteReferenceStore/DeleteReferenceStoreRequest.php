<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteReferenceStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteReferenceStoreRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
