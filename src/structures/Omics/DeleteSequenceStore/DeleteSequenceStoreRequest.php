<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteSequenceStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteSequenceStoreRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
